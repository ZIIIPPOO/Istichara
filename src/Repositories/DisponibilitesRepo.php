<?php
require_once __DIR__ . '/../../config/database.php';
class DisponibilitesRepo
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create(Disponibilites $disponibilite)
    {

        $sql = "INSERT INTO disponibilites (user_id, jour_semaine, heure_debut, heure_fin, is_active) 
                VALUES (?, ?, ?, ?, ?) WHERE user_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $disponibilite->getUserId(),
            $disponibilite->getJourSemaine(),
            $disponibilite->getHeureDebut(),
            $disponibilite->getHeureFin(),
            $disponibilite->isActive(),
            $disponibilite->getUserId()
        ]);

        $disponibilite->setId($this->db->lastInsertId());
        return $disponibilite;
    }

    public function getAllDispo($user_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM `disponibilites` WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }
    public static function getDisById($id)
    {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare(
            "SELECT * FROM disponibilites WHERE user_id = ?"
        );
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getDispoByDay($user_id, $jour_semaine)
    {
        $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM `disponibilites` WHERE user_id = ? AND jour_semaine = ?");
        $stmt->execute([$user_id, $jour_semaine]);
        return $stmt->fetchAll();
    }
    public function edit(Disponibilites $edited, $row_id)
    {
        $sql = "UPDATE disponibilites SET jour_semaine = ?, heure_debut = ?, heure_fin = ?, is_active = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $edited->getJourSemaine(),
            $edited->getHeureDebut(),
            $edited->getHeureFin(),
            $edited->isActive(),
            $row_id
        ]);
    }

    public function getAllDispoHuissier($user_id)
    {
        $stmt = $this->db->prepare("SELECT huissiers.*, cities.name as city, huissiers.name as nom, disponibilites.* FROM huissiers
        JOIN cities ON huissiers.city_id = cities.id
        INNER JOIN disponibilites on disponibilites.user_id = huissiers.id
        where huissiers.user_id = ? ");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }

    public function getAllDispoAvocat($user_id)
    {
        $stmt = $this->db->prepare("SELECT avocats.*, cities.name as city, avocats.name as nom, disponibilites.* FROM avocats
        JOIN cities ON avocats.city_id = cities.id
        INNER JOIN disponibilites on disponibilites.user_id = avocats.id
        where avocats.user_id = ? ");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }
}

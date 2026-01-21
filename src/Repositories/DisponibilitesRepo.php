<?php
require_once __DIR__ . '/../../config/database.php';
class DisponibilitesRepo {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create(Disponibilites $disponibilite) {
        $sql = "INSERT INTO disponibilites (user_id, jour_semaine, heure_debut, heure_fin, is_active) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $disponibilite->getUserId(),
            $disponibilite->getJourSemaine(),
            $disponibilite->getHeureDebut(),
            $disponibilite->getHeureFin(),
            $disponibilite->isActive()
        ]);

        $disponibilite->setId($this->db->lastInsertId());
        return $disponibilite;
    }

    public function getAllDispo($user_id){
        $stmt = $this->db->prepare("SELECT * FROM disponibilites where id = ?");
        return $stmt->execute([$user_id])->fetchAll();
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

?>
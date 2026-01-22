<?php
require_once __DIR__ . '/../../config/database.php';
class DisponibilitesRepo {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create(Disponibilites $disponibilite) {
       
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

    public function getAllDispo($user_id){
        $stmt = $this->db->prepare("SELECT * FROM `disponibilites` WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }
    public static function getDisById($id){
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM disponibilites WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function edit(Disponibilites $edited, $row_id){
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
}

?>
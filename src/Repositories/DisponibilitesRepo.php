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
}

?>
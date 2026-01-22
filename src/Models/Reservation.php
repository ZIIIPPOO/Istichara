<?php

require_once __DIR__ . '/../../config/database.php';

class Reservation
{
    private $db;
    private $id;
    private $client_id;
    private $professional_id;
    private $professional_type;
    private $date_reservation;
    private $heure_debut;
    private $heure_fin;
    private $status;
    private $motif;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getClientId()
    {
        return $this->client_id;
    }

    public function getProfessionalId()
    {
        return $this->professional_id;
    }

    public function getProfessionalType()
    {
        return $this->professional_type;
    }

    public function getDateReservation()
    {
        return $this->date_reservation;
    }

    public function getHeureDebut()
    {
        return $this->heure_debut;
    }

    public function getHeureFin()
    {
        return $this->heure_fin;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function getMotif()
    {
        return $this->motif;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setMotif($motif)
    {
        $this->motif = $motif;
    }

    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
    }

    public function setProfessionalId($professional_id)
    {
        $this->professional_id = $professional_id;
    }

    public function setProfessionalType($professional_type)
    {
        $this->professional_type = $professional_type;
    }

    public function setDateReservation($date_reservation)
    {
        $this->date_reservation = $date_reservation;
    }

    public function setHeureDebut($heure_debut)
    {
        $this->heure_debut = $heure_debut;
    }

    public function setHeureFin($heure_fin)
    {
        $this->heure_fin = $heure_fin;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function create()
    {
        $sql = "INSERT INTO reservations (client_id, professional_id, professional_type, date_reservation, heure_debut, heure_fin, motif, status) 
VALUES (?, ?, ?, ? , ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$this->client_id, $this->professional_id, $this->professional_type, $this->date_reservation, $this->heure_debut, $this->heure_fin, $this->motif, $this->status]);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM reservations WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM reservations WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function getByProId($professional_id)
    {
        $sql = "SELECT r.*, a.name as avocat_name, h.name as huissier_name
            FROM reservations r
            LEFT JOIN avocats a ON r.professional_id = a.id
            LEFT JOIN huissiers h ON r.professional_id = h.id
            WHERE r.professional_id = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$professional_id]);
        $results = $stmt->fetchAll();


        foreach ($results as &$row) {
            $row['name'] = $row['avocat_name'] ?: $row['huissier_name'];
        }

        return $results;
    }

    public function getByClientId($client_id)
    {

        $sql = "SELECT r.*, a.name as avocat_name, h.name as huissier_name
            FROM reservations r
            LEFT JOIN avocats a ON r.professional_id = a.id
            LEFT JOIN huissiers h ON r.professional_id = h.id
            WHERE r.client_id = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$client_id]);
        $results = $stmt->fetchAll();

        foreach ($results as &$row) {
            $row['name'] = $row['avocat_name'] ?: $row['huissier_name'];
        }

        return $results;
    }
    public function updateStatus($id, $status)
    {
        $sql = "UPDATE reservations SET status = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$status, $id]);
    }
}

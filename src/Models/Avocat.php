<?php
require_once __DIR__ . '/Person.php';
class Avocat extends Person
{
    private $specialites;
    private $consultationEnLigne;

    public function getSpecialites()
    {
        return $this->specialites;
    }
    public function getConsultationEnligne()
    {
        return $this->consultationEnLigne;
    }

    public function setSpecialites($specialites)
    {
        $this->specialites = $specialites;
    }
    public function setConsultationEnligne($consultationEnLigne)
    {
        $this->consultationEnLigne = $consultationEnLigne;
    }

    public function getAll()
    {
        $sql = "SELECT avocats.*, cities.name as city, avocats.name as nom FROM avocats
JOIN cities ON avocats.city_id = cities.id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getAllByStatus()
    {
        $sql = "SELECT avocats.*, cities.name as city, avocats.name as nom FROM avocats
        JOIN cities ON avocats.city_id = cities.id
        where avocats.asigned = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['no']);
        $results = $stmt->fetchAll();
        return $results;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM avocats WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function create()
    {
        $sql = "INSERT INTO avocats(name, city_id, specialites, annees_experience, tarif_horaire, consultation_en_ligne) VALUES (?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$this->name, $this->cityId, $this->specialites, $this->anneesExperience, $this->tarifHoraire, $this->consultationEnLigne]);
    }
    public function update()
    {
        $sql = "UPDATE avocats SET name = ?, city_id = ?, specialites = ?, annees_experience = ?, tarif_horaire = ?, consultation_en_ligne = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$this->name, $this->cityId, $this->specialites, $this->anneesExperience, $this->tarifHoraire, $this->consultationEnLigne, $this->id]);
    }
    public function updateStausById($id)
    {
        $sql = "UPDATE avocats SET asigned =? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['yes', $id]);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM avocats WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function getTopThree()
    {
        $sql = "SELECT avocats.*, cities.name as city, avocats.name as nom FROM avocats 
        JOIN cities ON avocats.city_id = cities.id
        ORDER BY annees_experience DESC LIMIT 3";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getAllPagination($start, $resultPerPage)
    {
        $sql = "SELECT avocats.*, cities.name as city, avocats.name as nom 
            FROM avocats 
            JOIN cities ON avocats.city_id = cities.id 
            LIMIT $start, $resultPerPage";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

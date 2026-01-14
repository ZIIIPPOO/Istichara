<?php
require_once 'Person.php';
class Avocat extends Person
{
    private $specialites;
    private $consultationEnLigne;

    public function getSpecialites(){return $this->specialites;}
    public function getConsultationEnligne(){return $this->consultationEnLigne;}

    public function setSpecialites($specialites){$this->specialites = $specialites;}
    public function setConsultationEnligne($consultationEnLigne){$this->consultationEnLigne = $consultationEnLigne;}

    public function getAll()
    {
        $sql = "SELECT * FROM avocats";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
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
    public function delete()
    {
        $sql = "DELETE FROM avocats WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$this->id]);
    }
}
<?php
require_once 'Person.php';

class Huissier extends Person
{
    private $typeActes;

    public function getTypeActes() { return $this->typeActes; }

    public function setTypeActes($typeActes) { $this->typeActes = $typeActes; }

    public function getAll()
    {
        $sql = "SELECT * FROM huissiers";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM huissiers WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create()
    {
        $sql = "INSERT INTO huissiers(name, city_id, type_actes, annees_experience, tarif_horaire) 
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($sql);        
        return $stmt->execute([$this->name,$this->cityId,$this->typeActes,$this->anneesExperience,$this->tarifHoraire]);
    }

    public function update()
    {
        $sql = "UPDATE huissiers SET name = ?, city_id = ?, type_actes = ?, annees_experience = ?, tarif_horaire = ? WHERE id = ?";        
        $stmt = $this->db->prepare($sql);    
        return $stmt->execute([$this->name,$this->cityId,$this->typeActes,$this->anneesExperience,$this->tarifHoraire,$this->id]);
    }

    public function delete()
    {
        $sql = "DELETE FROM huissiers WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$this->id]);
    }
}
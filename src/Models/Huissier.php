<?php
require_once 'Person.php';

class Huissier extends Person
{
    private $typeActes;

    public function getTypeActes()
    {
        return $this->typeActes;
    }

    public function setTypeActes($typeActes)
    {
        $this->typeActes = $typeActes;
    }

    public function getAll()
    {
        $sql = "SELECT huissiers.*, cities.name as city, huissiers.name as nom FROM huissiers
        JOIN cities ON huissiers.city_id = cities.id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllByStatus()
    {
        $sql = "SELECT huissiers.*, cities.name as city, huissiers.name as nom FROM huissiers
        JOIN cities ON huissiers.city_id = cities.id
        where huissiers.asigned = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['pending']);
        $results = $stmt->fetchAll();
        return $results;
    }

    public function getById($id)
    {
        $sql = "SELECT huissiers.*, cities.name as city, huissiers.name as nom FROM huissiers
        JOIN cities ON huissiers.city_id = cities.id
        where huissiers.id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create()
    {
        $sql = "INSERT INTO huissiers(name, city_id, type_actes, annees_experience, tarif_horaire) 
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$this->name, $this->cityId, $this->typeActes, $this->anneesExperience, $this->tarifHoraire]);
    }

    public function update()
    {
        $sql = "UPDATE huissiers SET name = ?, city_id = ?, type_actes = ?, annees_experience = ?, tarif_horaire = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$this->name, $this->cityId, $this->typeActes, $this->anneesExperience, $this->tarifHoraire, $this->id]);
    }

    public function updateStausById(int $id, string $status)
    {
        $sql = "UPDATE huissiers SET asigned =? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$status, $id]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM huissiers WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
    public function getAllPagination($start, $resultPerPage)
    {
        $sql = "SELECT huissiers.*, cities.name as city, huissiers.name as nom 
            FROM huissiers 
            JOIN cities ON huissiers.city_id = cities.id 
            LIMIT $start, $resultPerPage";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

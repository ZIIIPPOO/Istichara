<?php

require_once __DIR__ . '/../../config/database.php';


class City
{
    private $id;
    private $db;
    private $name;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }
    public function getAll()
    {
        $sql = "SELECT name FROM cities";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getIdByName($name)
    {
        $sql = "SELECT id FROM cities WHERE name = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$name]);
        $res = $stmt->fetch();
        return $res['id'];
    }
    
    public function getNameById($id)
    {
        $sql = "SELECT name FROM cities WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $res = $stmt->fetch();
        return $res['name'];
    }
}
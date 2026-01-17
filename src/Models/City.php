<?php

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
}
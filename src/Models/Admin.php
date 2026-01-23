<?php
require_once __DIR__ . '/Person.php';

class Admin extends Person
{
    public function getInfos(int $id)
    {
        $sql = "SELECT users.* FROM users
        where users.id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
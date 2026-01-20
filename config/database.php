<?php
class Database {

    private $connection;

    public $host = "db";
    public $db_name = "istichara";
    public $username = "root";
    public $password = "root";
    public static $instance = null;



    private function __construct()
    {
        $this->connection = new PDO(
            "mysql:host=$this->host;dbname=$this->db_name",
            $this->username,
            $this->password
        );
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }

    public function getConnection()
    {
        return $this->connection;
    }
    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance = new Database();
        }
        return self::$instance; 
    }

}
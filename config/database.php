<?php
class Database
{

    private $connection;
    public static $instance = null;

    public $host = '3.89.5.230';

    public $db   = 'mydb';
    public $user = 'admin';
    public $pass = 'Admin123!';
    public $charset = 'utf8mb4';

    // public $dsn = "mysql:host=$host;dbname=$db;charset=$charset";



    private function __construct()
    {
        $this->connection = new PDO(
            "mysql:host=$this->host;dbname=$this->db",
            $this->user,
            $this->pass
        );
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getConnection()
    {
        return $this->connection;
    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}

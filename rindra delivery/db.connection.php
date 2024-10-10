<?php
class DBConnection {
    private $host = 'localhost';
    private $db = 'your_database_name';
    private $user = 'your_username';
    private $pass = 'your_password';
    private $charset = 'utf8mb4';
    public $pdo;


    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }


    public function getConnection() {
        return $this->pdo;
    }
}
?>


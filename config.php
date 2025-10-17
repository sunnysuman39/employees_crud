<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "company";
    public $conn;

    public function __construct() {
        $this->connectDB();
    }

    private function connectDB() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }
}
?>

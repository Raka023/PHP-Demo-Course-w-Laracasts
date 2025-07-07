<?php

class Database {
    public $conn;

    public function __construct() {
        $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
        $username = 'root';
        $password = '';
        $options = [];

        $this->conn = new PDO($dsn, $username, $password);
    }

    public function query($query) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
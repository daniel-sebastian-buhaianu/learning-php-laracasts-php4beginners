<?php

require 'config.php';

class Database
{
    public $conn;

    public function __construct()
    {
        $this->conn = new PDO(DB_DSN, DB_USER, DB_PASS);
    }

    public function query($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
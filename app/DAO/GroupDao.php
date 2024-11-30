<?php

class GroupDao {

    private $conn;

    public function __construct() {

        try {
            $this->conn = new PDO("mysql:host=localhost:3307;dbname=amigosecreto", "root","");
        } catch (PDOException $e) {
            echo "Erro de conexão com o banco de dados: " . $e->getMessage();
        }
    }

    

}
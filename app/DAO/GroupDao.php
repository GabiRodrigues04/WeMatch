<?php

class GroupDao {
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=localhost:3307;dbname=wematch", "root", "");
        } catch (PDOException $e) {
            echo "Erro de conexão com o banco de dados: " . $e->getMessage();
        }
    }

    public function insertGroup(GroupsModel $model) {
        $sql = "INSERT INTO groups (host_name, group_name, group_desc, celebration_date, budget) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(1, $model->host_name);
        $stmt->bindValue(2, $model->group_name);
        $stmt->bindValue(3, $model->group_desc);
        $stmt->bindValue(4, $model->celebration_date);
        $stmt->bindValue(5, $model->budget);
        $stmt->execute();

        return $this->conn->lastInsertId();
    }

    public function insertParticipants($groupId, $participants) {
        $sql = "INSERT INTO guests (guest_name, id_group) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);

        foreach ($participants as $participant) {
            $stmt->bindValue(1, $participant);
            $stmt->bindValue(2, $groupId);
            $stmt->execute();
        }
    }
}

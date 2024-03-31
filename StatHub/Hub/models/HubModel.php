<?php
class HubModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllStat() {
    $stmt = $this->pdo->prepare("SELECT 
        (SELECT COUNT(*) FROM USERS) AS NombreUtilisateurs,
        (SELECT COUNT(*) FROM COMPANY) AS NombreCompagnies,
        (SELECT COUNT(*) FROM INTERNSHIP) AS NombreInternships,
        (SELECT COUNT(*) FROM STUDENTS) AS NombreStudent;");

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
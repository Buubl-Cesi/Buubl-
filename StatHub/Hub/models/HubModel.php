<?php
class HubModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllStat() {
        $stmt = $this->pdo->prepare("SELECT 
        COUNT(u.STUDENT_NAME) AS Nombre_de_noms,
        COUNT(u.STUDENT_FNAME) AS Nombre_de_prenoms,
        COUNT(DISTINCT p.PROMOTION_NAME) AS Nombre_de_promotions,
        COUNT(s.STUDENTS_CMPT) AS Compteur_total
    FROM
        STUDENTS s
    JOIN
        _USER u ON s.ID_USER = u.ID_USER
    LEFT JOIN
        PROMOTION p ON s.ID_PROMOTION = p.ID_PROMOTION;");

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }
}
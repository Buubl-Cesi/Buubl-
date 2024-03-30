<?php
class OfferModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getSector() {
        $stmt = $this->pdo->prepare("SELECT DISTINCT `COMPANY_ACTIVITY` FROM `COMPANY`;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllStat() {
        $stmt = $this->pdo->prepare("SELECT 
                u.STUDENT_NAME AS Nom,
                u.STUDENT_FNAME AS Prenom,
                p.PROMOTION_NAME AS Promotion,
                s.STUDENTS_CMPT AS Compteur
            FROM
                STUDENTS s
            JOIN
                _USER u ON s.ID_USER = u.ID_USER
            LEFT JOIN
                PROMOTION p ON s.ID_PROMOTION = p.ID_PROMOTION;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllStatWithParam($orderBy, $orderByCrease, $parameter, $sector) {
        $stmt = $this->pdo->prepare("SELECT 
        u.STUDENT_NAME AS Nom,
        u.STUDENT_FNAME AS Prenom,
        p.PROMOTION_NAME AS Promotion,
        s.STUDENTS_CMPT AS Compteur
    FROM
        STUDENTS s
    JOIN
        _USER u ON s.ID_USER = u.ID_USER
    LEFT JOIN
        PROMOTION p ON s.ID_PROMOTION = p.ID_PROMOTION
    WHERE 
        u.STUDENT_NAME = :parameter
    ");

    
        $stmt->bindParam(':parameter', $parameter);
        
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
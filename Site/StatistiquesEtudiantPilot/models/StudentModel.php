<?php
class StudentModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getPromoPilot($id_pilot) {
        $stmt = $this->pdo->prepare("SELECT PILOT_PROMOTION FROM pilot WHERE ID_PILOT = (SELECT ID_PILOT FROM USERS WHERE ID_USERS = :id_pilot)");

        $stmt->bindParam(":id_pilot", $id_pilot);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllStat($promo) {
        $stmt = $this->pdo->prepare("SELECT 
        u.USERS_NAME AS Nom,
        u.USERS_FNAME AS Prenom,
        s.STUDENT_PROMOTION AS Promo,
        COUNT(DISTINCT a.ID_APPLICATIONS) AS Nombre_Stage, 
        COUNT(DISTINCT l.ID_LIKES) AS Nombre_Likes

        FROM USERS u
        JOIN STUDENTS s ON u.ID_USERS = s.ID_STUDENTS 
        LEFT JOIN APPLICATIONS a ON s.ID_STUDENTS = a.ID_STUDENTS
        LEFT JOIN INTERNSHIP i ON a.ID_INTERNSHIP = i.ID_INTERNSHIP
        LEFT JOIN LIKES l ON i.ID_INTERNSHIP = l.ID_INTERNSHIP

        WHERE S.STUDENT_PROMOTION = :promo

        GROUP BY u.ID_USERS
        ORDER BY U.USERS_NAME ASC");

        $stmt->bindParam(":promo", $promo);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
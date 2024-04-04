<?php
class HomeModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

 

    public function getLastFourCompanies() {
        $stmt = $this->pdo->prepare("SELECT 
        I.INTERNSHIP_NAME AS AddedNAME,
        C.COMPANY_IMG AS AddedIMG
        FROM USERS U
        JOIN STUDENTS S ON U.ID_STUDENTS = S.ID_STUDENTS 
        JOIN APPLICATIONS A ON S.ID_STUDENTS = A.ID_STUDENTS 
        JOIN INTERNSHIP I ON A.ID_INTERNSHIP = I.ID_INTERNSHIP
        JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
        ORDER BY A.ID_APPLICATIONS DESC LIMIT 4;");
        
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLastFourAppliedCompanies($id) {
        $stmt = $this->pdo->prepare("SELECT 
        I.INTERNSHIP_NAME AS LikedNAME, 
        C.COMPANY_IMG AS LikedIMG
        FROM APPLICATIONS A
        JOIN INTERNSHIP I ON A.ID_INTERNSHIP = I.ID_INTERNSHIP
        JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
        JOIN STUDENTS S ON A.ID_STUDENTS = S.ID_STUDENTS
        JOIN USERS U ON S.ID_STUDENTS = U.ID_STUDENTS 
        WHERE U.ID_USERS = :id_user  
        ORDER BY A.ID_APPLICATIONS DESC LIMIT 4;");

        $stmt->bindParam(':id_user', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPilotInfo($id) {
        $stmt = $this->pdo->prepare("SELECT 
        U.USERS_NAME AS InfoNAME, 
        U.USERS_FNAME AS InfoFNAME, 
        U.USERS_MAIL AS InfoMAIL, 
        U.USERS_IMG AS InfoIMG
        FROM USERS U 
        INNER JOIN PILOT P ON U.ID_PILOT = P.ID_PILOT
        WHERE P.PILOT_PROMOTION = (SELECT STUDENT_PROMOTION FROM STUDENTS WHERE ID_STUDENTS = (SELECT ID_STUDENTS FROM USERS WHERE ID_USERS = :id_user))");

        $stmt->bindParam(':id_user', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
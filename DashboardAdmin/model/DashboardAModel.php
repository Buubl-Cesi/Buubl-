<?php
class DashboardAModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // public function getStudents(){
    // }

    public function affichage($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student){
        echo $name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student;
    }
    
    public function createStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student){
        $stmt = $this->pdo->prepare("INSERT INTO COUNTRY (COUNTRY_NAME) VALUES (?);
        INSERT INTO CITY (CITY_NAME, CITY_PC, ID_COUNTRY) VALUES (?, ?, (SELECT MAX(ID_COUNTRY) FROM COUNTRY));
        INSERT INTO ADDRESS (ADDRESS_STREET, ADDRESS_NB_APPARTEMENT, ID_CITY) VALUES (?, ?, (SELECT MAX(ID_CITY) FROM CITY));
        INSERT INTO STUDENTS (STUDENTS_STATUS, STUDENTS_CMPT, STUDENT_COVER_LETTER, STUDENT_PROMOTION) VALUES ('Actif', 10, 'Voici ma lettre de motivation...', ?);
        INSERT INTO USERS (
          USERS_NAME, 
          USERS_FNAME, 
          USERS_LOGIN, 
          USERS_PASSWORD, 
          USERS_MAIL, 
          USERS_IMG, 
          ID_ADDRESS, 
          ID_PILOT,
          ID_STUDENTS, 
          ID_ADMIN
        ) VALUES (
          ?, 
          ?, 
          ?,
          ?, 
          ?, 
          'chemin/vers/imageUser.png', 
          (SELECT MAX(ID_ADDRESS) FROM ADDRESS), 
          NULL,
          (SELECT MAX(ID_STUDENTS) FROM STUDENTS), 
          NULL
        );");
        
        $stmt->execute([$country_student, $city_student, $pc_student, $street_student, $numap_student, $promotion_student, $name_student, $fname_student, $login_student, $password_student, $mail_student]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    // public function updateStudents(){
    //     $stmt = $this->pdo->prepare("
        
        
        
        
    //     ")
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    // public function deleteStudents(){
    //     $stmt = $this->pdo->prepare("
        
        
        
        
    //     ")
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    
}
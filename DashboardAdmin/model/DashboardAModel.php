<?php
class DashboardAModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // public function getStudents(){
    // }

    public function createStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student){
        $stmt = $this->pdo->prepare("INSERT INTO COUNTRY (COUNTRY_NAME) VALUES (:country_student);
        INSERT INTO CITY (CITY_NAME, CITY_PC, ID_COUNTRY) VALUES (:city_student,:pc_student, (SELECT MAX(ID_COUNTRY) FROM COUNTRY));
        INSERT INTO ADDRESS (ADDRESS_STREET, ADDRESS_NB_APPARTEMENT, ID_CITY) VALUES (:street_student, :numap_student, (SELECT MAX(ID_CITY) FROM CITY));
        INSERT INTO STUDENTS (STUDENTS_STATUS, STUDENTS_CMPT, STUDENT_COVER_LETTER, STUDENT_PROMOTION) VALUES ('Actif', 0, '  ', :promotion_student);
        INSERT INTO USERS (USERS_NAME, USERS_FNAME, USERS_LOGIN, USERS_PASSWORD, USERS_MAIL, USERS_IMG, ID_ADDRESS, ID_PILOT, ID_STUDENTS, ID_ADMIN) VALUES (
        :name_student, :fname_student, :login_student, :password_student, :mail_student, CONCAT('../../../../Images/', :login_student, '.png'), (SELECT MAX(ID_ADDRESS) FROM ADDRESS), NULL,(SELECT MAX(ID_STUDENTS) FROM STUDENTS), NULL)");
        $stmt->bindParam(':name_student', $name_student);
        $stmt->bindParam(':fname_student', $fname_student);
        $stmt->bindParam(':mail_student', $mail_student);
        $stmt->bindParam(':login_student', $login_student);
        $stmt->bindParam(':password_student', $password_student);
        $stmt->bindParam(':promotion_student', $promotion_student);
        $stmt->bindParam(':country_student', $country_student);
        $stmt->bindParam(':pc_student', $pc_student);
        $stmt->bindParam(':city_student', $city_student);
        $stmt->bindParam(':street_student', $street_student);
        $stmt->bindParam(':numap_student', $numap_student);
        $stmt->bindParam(':pfp_student', $pfp_student);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

  public function updateStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student){
      $stmt = $this->pdo->prepare("UPDATE COUNTRY
      SET COUNTRY_NAME = :country_student
      WHERE ID_COUNTRY = (SELECT ID_COUNTRY FROM CITY JOIN ADDRESS ON CITY.ID_CITY = ADDRESS.ID_CITY JOIN USERS ON ADDRESS.ID_ADDRESS = USERS.ID_ADDRESS WHERE USERS.USERS_LOGIN = :login_student);
      
      UPDATE CITY
      SET CITY_NAME = :city_student, CITY_PC = :pc_student
      WHERE ID_CITY = (SELECT ID_CITY FROM ADDRESS JOIN USERS ON ADDRESS.ID_ADDRESS = USERS.ID_ADDRESS WHERE USERS.USERS_LOGIN = :login_student);
      
      UPDATE ADDRESS
      SET ADDRESS_STREET = :street_student, ADDRESS_NB_APPARTEMENT = :numap_student
      WHERE ID_ADDRESS = (SELECT ID_ADDRESS FROM USERS WHERE USERS_LOGIN = :login_student);
      
      UPDATE STUDENTS
      SET STUDENT_PROMOTION = :promotion_student
      WHERE ID_STUDENTS = (SELECT ID_STUDENTS FROM USERS WHERE USERS_LOGIN = :login_student);
      
      UPDATE USERS
      SET USERS_NAME = :name_student, USERS_FNAME = :fname_student, USERS_PASSWORD = :password_student, USERS_MAIL = :mail_student
      WHERE USERS_LOGIN = :login_student;");

      $stmt->bindParam(':name_student', $name_student);
      $stmt->bindParam(':fname_student', $fname_student);
      $stmt->bindParam(':mail_student', $mail_student);
      $stmt->bindParam(':login_student', $login_student);
      $stmt->bindParam(':password_student', $password_student);
      $stmt->bindParam(':promotion_student', $promotion_student);
      $stmt->bindParam(':country_student', $country_student);
      $stmt->bindParam(':pc_student', $pc_student);
      $stmt->bindParam(':city_student', $city_student);
      $stmt->bindParam(':street_student', $street_student);
      $stmt->bindParam(':numap_student', $numap_student);
      $stmt->bindParam(':pfp_student', $pfp_student);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function deleteStudents($login_student){
    $stmt = $this->pdo->prepare("SELECT ID_STUDENTS FROM USERS WHERE USERS_LOGIN = ?");
    $stmt->execute([$login_student]);
    $id_students = $stmt->fetchColumn();

    $stmt = $this->pdo->prepare("SELECT ID_ADDRESS FROM USERS WHERE USERS_LOGIN = ?");
    $stmt->execute([$login_student]);
    $id_address = $stmt->fetchColumn();

    $stmt = $this->pdo->prepare("DELETE FROM APPLICATIONS WHERE ID_STUDENTS = ?");
    $stmt->execute([$id_students]);

    $stmt = $this->pdo->prepare("DELETE FROM USERS WHERE USERS_LOGIN = ?");
    $stmt->execute([$login_student]);

    $stmt = $this->pdo->prepare("DELETE FROM STUDENTS WHERE ID_STUDENTS = ?");
    $stmt->execute([$id_students]);

    $stmt = $this->pdo->prepare("DELETE FROM ADDRESS WHERE ID_ADDRESS = ?");
    $stmt->execute([$id_address]);
}



  public function createCompany($name_company, $activity_company, $desc_company, $country_company, $pc_company, $city_company, $street_company, $numap_company, $pfp_company){
      $stmt = $this->pdo->prepare("INSERT INTO COUNTRY (COUNTRY_NAME) VALUES (:country_company);
      INSERT INTO CITY (CITY_NAME, CITY_PC, ID_COUNTRY) VALUES (:city_company, :pc_company, (SELECT MAX(ID_COUNTRY) FROM COUNTRY));
      INSERT INTO ADDRESS (ADDRESS_STREET, ADDRESS_NB_APPARTEMENT, ID_CITY) VALUES (:street_company, :numap_company, (SELECT MAX(ID_CITY) FROM CITY));
      INSERT INTO COMPANY (
        COMPANY_NAME, 
        COMPANY_ACTIVITY, 
        COMPANY_MARK, 
        COMPANY_DESCRIPTION, 
        COMPANY_IMG, 
        ID_ADDRESS
      ) VALUES (
        :name_company, 
        :activity_company, 
        0, 
        :desc_company, 
        CONCAT('../../../../Images/', :pfp_company, '.png'), 
        (SELECT MAX(ID_ADDRESS) FROM ADDRESS)
      );");

      $stmt->bindParam(':name_company', $name_company);
      $stmt->bindParam(':activity_company', $activity_company);
      $stmt->bindParam(':desc_company', $desc_company);
      $stmt->bindParam(':country_company', $country_company);
      $stmt->bindParam(':pc_company', $pc_company);
      $stmt->bindParam(':city_company', $city_company);
      $stmt->bindParam(':street_company', $street_company);
      $stmt->bindParam(':numap_company', $numap_company);
      $stmt->bindParam(':pfp_company', $pfp_company);    
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function updateCompany($name_company, $activity_company, $desc_company, $country_company, $pc_company, $city_company, $street_company, $numap_company, $pfp_company){
    $stmt = $this->pdo->prepare("UPDATE ADDRESS
    INNER JOIN COMPANY ON ADDRESS.ID_ADDRESS = COMPANY.ID_ADDRESS
    SET 
        ADDRESS.ADDRESS_STREET = :street_company,
        ADDRESS.ADDRESS_NB_APPARTEMENT = :numap_company
    WHERE COMPANY.COMPANY_NAME = :name_company;
    
    UPDATE CITY
    INNER JOIN ADDRESS ON CITY.ID_CITY = ADDRESS.ID_CITY
    INNER JOIN COMPANY ON ADDRESS.ID_ADDRESS = COMPANY.ID_ADDRESS
    SET 
        CITY.CITY_NAME = :city_company, 
        CITY.CITY_PC = :pc_company
    WHERE COMPANY.COMPANY_NAME = :name_company;
    
    UPDATE COUNTRY
    INNER JOIN CITY ON COUNTRY.ID_COUNTRY = CITY.ID_COUNTRY
    INNER JOIN ADDRESS ON CITY.ID_CITY = ADDRESS.ID_CITY
    INNER JOIN COMPANY ON ADDRESS.ID_ADDRESS = COMPANY.ID_ADDRESS
    SET 
        COUNTRY.COUNTRY_NAME = :country_company
    WHERE COMPANY.COMPANY_NAME = :name_company;
    
    UPDATE COMPANY
    SET 
        COMPANY_NAME = :name_company, 
        COMPANY_ACTIVITY = :activity_company, 
        COMPANY_MARK = '0', 
        COMPANY_DESCRIPTION = :desc_company, 
        COMPANY_IMG = :pfp_company
    WHERE COMPANY_NAME = :name_company;
    ");

    $stmt->bindParam(':name_company', $name_company);
    $stmt->bindParam(':activity_company', $activity_company);
    $stmt->bindParam(':desc_company', $desc_company);
    $stmt->bindParam(':country_company', $country_company);
    $stmt->bindParam(':pc_company', $pc_company);
    $stmt->bindParam(':city_company', $city_company);
    $stmt->bindParam(':street_company', $street_company);
    $stmt->bindParam(':numap_company', $numap_company);
    $stmt->bindParam(':pfp_company', $pfp_company);    
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function deleteCompany($name_company){
    $stmt = $this->pdo->prepare("DELETE FROM APPLICATIONS
    WHERE ID_INTERNSHIP IN (
        SELECT ID_INTERNSHIP FROM INTERNSHIP WHERE ID_COMPANY IN (
            SELECT ID_COMPANY FROM COMPANY WHERE COMPANY_NAME = :name_company
        )
    );
    
    DELETE FROM LIKES
    WHERE ID_INTERNSHIP IN (
        SELECT ID_INTERNSHIP FROM INTERNSHIP WHERE ID_COMPANY IN (
            SELECT ID_COMPANY FROM COMPANY WHERE COMPANY_NAME = :name_company
        )
    );
    
    DELETE FROM INTERNSHIP
    WHERE ID_COMPANY IN (
        SELECT ID_COMPANY FROM COMPANY WHERE COMPANY_NAME = :name_company
    );
    
    DELETE FROM COMPANY
    WHERE COMPANY_NAME = :name_company;
    ");

    $stmt->bindParam(':name_company', $name_company);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function createPilot($name_pilot, $fname_pilot, $mail_pilot, $login_pilot, $password_pilot, $promotion_pilot, $country_pilot, $pc_pilot, $city_pilot, $street_pilot, $numap_pilot, $activity_pilot){
    $stmt = $this->pdo->prepare("INSERT INTO COUNTRY (COUNTRY_NAME) VALUES (:country_pilot);
    INSERT INTO CITY (CITY_NAME, CITY_PC, ID_COUNTRY) VALUES (:city_pilot, :pc_pilot, (SELECT MAX(ID_COUNTRY) FROM COUNTRY));
    INSERT INTO ADDRESS (ADDRESS_STREET, ADDRESS_NB_APPARTEMENT, ID_CITY) VALUES (:street_pilot, :numap_pilot, (SELECT MAX(ID_CITY) FROM CITY));
    INSERT INTO PILOT (PILOT_FIELD, PILOT_PROMOTION) VALUES (:activity_pilot, :promotion_pilot);
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
      :name_pilot, 
      :fname_pilot, 
      :login_pilot,
      :password_pilot, 
      :mail_pilot, 
      'chemin/vers/imagePilote.png', 
      (SELECT MAX(ID_ADDRESS) FROM ADDRESS), 
      (SELECT MAX(ID_PILOT) FROM PILOT), 
      NULL, 
      NULL
    );");

    $stmt->bindParam(':name_pilot', $name_pilot);
    $stmt->bindParam(':fname_pilot', $fname_pilot);
    $stmt->bindParam(':mail_pilot', $mail_pilot);
    $stmt->bindParam(':login_pilot', $login_pilot);
    $stmt->bindParam(':password_pilot', $password_pilot);
    $stmt->bindParam(':promotion_pilot', $promotion_pilot);
    $stmt->bindParam(':country_pilot', $country_pilot);
    $stmt->bindParam(':pc_pilot', $pc_pilot);
    $stmt->bindParam(':city_pilot', $city_pilot);
    $stmt->bindParam(':street_pilot', $street_pilot);
    $stmt->bindParam(':numap_pilot', $numap_pilot);
    $stmt->bindParam(':activity_pilot', $activity_pilot);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

///Ne marche pas 
/////
/////
/////
/////
/////

public function updatePilot($name_pilot, $fname_pilot, $mail_pilot, $login_pilot, $password_pilot, $promotion_pilot, $country_pilot, $pc_pilot, $city_pilot, $street_pilot, $numap_pilot, $activity_pilot){
    $stmt = $this->pdo->prepare("UPDATE COUNTRY
    SET COUNTRY_NAME = :country_pilot
    WHERE ID_COUNTRY = (SELECT ID_COUNTRY FROM CITY WHERE ID_CITY = (SELECT ID_CITY FROM ADDRESS WHERE ID_ADDRESS = (SELECT ID_ADDRESS FROM USERS WHERE USERS_LOGIN = :login_pilot)));
    
    UPDATE CITY
    SET CITY_NAME = :city_pilot, CITY_PC = :pc_pilot
    WHERE ID_CITY = (SELECT ID_CITY FROM ADDRESS WHERE ID_ADDRESS = (SELECT ID_ADDRESS FROM USERS WHERE USERS_LOGIN = :login_pilot));
    
    UPDATE ADDRESS
    SET ADDRESS_STREET = :street_pilot, ADDRESS_NB_APPARTEMENT = :numap_pilot
    WHERE ID_ADDRESS = (SELECT ID_ADDRESS FROM USERS WHERE USERS_LOGIN = :login_pilot);
    
    UPDATE PILOT
    SET PILOT_FIELD = :activity_pilot, PILOT_PROMOTION = :promotion_pilot
    WHERE ID_PILOT = (SELECT ID_PILOT FROM USERS WHERE USERS_LOGIN = :login_pilot);
    
    UPDATE USERS
    SET USERS_NAME = :name_pilot, 
        USERS_FNAME = :fname_pilot, 
        USERS_LOGIN = :login_pilot, 
        USERS_PASSWORD = :password_pilot, 
        USERS_MAIL = :mail_pilot, 
        USERS_IMG = 'chemin/vers/imagePilote.png'
    WHERE USERS_LOGIN = :login_pilot;");

    $stmt->bindParam(':name_pilot', $name_pilot);
    $stmt->bindParam(':fname_pilot', $fname_pilot);
    $stmt->bindParam(':mail_pilot', $mail_pilot);
    $stmt->bindParam(':login_pilot', $login_pilot);
    $stmt->bindParam(':password_pilot', $password_pilot);
    $stmt->bindParam(':promotion_pilot', $promotion_pilot);
    $stmt->bindParam(':country_pilot', $country_pilot);
    $stmt->bindParam(':pc_pilot', $pc_pilot);
    $stmt->bindParam(':city_pilot', $city_pilot);
    $stmt->bindParam(':street_pilot', $street_pilot);
    $stmt->bindParam(':numap_pilot', $numap_pilot);
    $stmt->bindParam(':activity_pilot', $activity_pilot);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/////
/////
/////
/////
/////
/////

public function createOffer($name_offer, $desc_offer, $duration_offer, $start_offer, $end_offer, $hour_offer, $pricing_offer, $skills_offer, $nb_offer){
    $stmt = $this->pdo->prepare("INSERT INTO INTERNSHIP (
        INTERNSHIP_NAME, 
        INTERNSHIP_DESCRIPTION, 
        INTERNSHIP_DURATION, 
        INTERNSHIP_START_DATE, 
        INTERNSHIP_END_DATE, 
        INTERNSHIP_SHEDULE, 
        INTERNSHIP_REMUNERATION, 
        INTERNSHIP_SKILLS, 
        INTERNSHIP_PLACE_NB, 
        ID_COMPANY
      ) VALUES (
        :name_offer, 
        :desc_offer, 
        :duration_offer, -- Durée en mois
        :start_offer, -- Date de début
        :end_offer, -- Date de fin
        :hour_offer, -- Horaires prévus par semaine
        :pricing_offer, -- Rémunération mensuelle
        :skills_offer, -- Compétences requises
        :nb_offer -- Nombre de places disponibles
        -- , (SELECT ID_COMPANY FROM COMPANY WHERE COMPANY_NAME = 'Nom de la Compagnie') 
      );");
    

    $stmt->bindParam(':name_offer', $name_offer);
    $stmt->bindParam(':desc_offer', $desc_offer);
    $stmt->bindParam(':duration_offer', $duration_offer);
    $stmt->bindParam(':start_offer', $start_offer);
    $stmt->bindParam(':end_offer', $end_offer);
    $stmt->bindParam(':hour_offer', $hour_offer);
    $stmt->bindParam(':pricing_offer', $pricing_offer);
    $stmt->bindParam(':skills_offer', $skills_offer);
    $stmt->bindParam(':nb_offer', $nb_offer);
  
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    
}
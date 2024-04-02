<?php
class OfferPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getSector() {
        $stmt = $this->pdo->prepare("SELECT DISTINCT COMPANY_ACTIVITY FROM internship NATURAL JOIN Company;");
        $stmt->execute();
        $sector = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $sector;
    }

    public function getSkills() {
        $stmt = $this->pdo->prepare("SELECT DISTINCT INTERNSHIP_SKILLS FROM internship;");
        $stmt->execute();
        $skills = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $skills;
    }

    public function getNumberOffer() {
        $stmt = $this->pdo->query("SELECT COUNT(ID_INTERNSHIP) AS NUMBER_ARTICLE FROM INTERNSHIP NATURAL JOIN COMPANY;");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return intval($result['NUMBER_ARTICLE']);
    }

    public function getOfferWithLimit($limit, $offset)
    {
        $stmt = $this->pdo->prepare("SELECT INTERNSHIP_NAME, 
        COMPANY_IMG 
        FROM internship 
        NATURAL JOIN Company
        LIMIT :offset, :Limit;");
        $stmt->bindParam(':Limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public function getNumberOfferWithParameters($name, $sector, $skill, $city, $duration) {
        // Début de la requête SQL
        
        $sql = "SELECT
            COUNT(I.ID_INTERNSHIP) AS NUMBER_OFFER
            FROM INTERNSHIP I
            JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
            JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
            JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
            WHERE 1=1";
    
        // Tableau pour stocker les paramètres de la requête
        $params = array();
    
        // Vérifiez chaque paramètre et ajoutez une condition à la requête si le paramètre n'est pas vide
        if (!empty($name)) {
            $sql .= " AND COMPANY_NAME = :name";  // 'SECTOR' should be replaced with the actual column name
            $params[':name'] = $name;
        }

        if ($sector !== "NoOne") {
            $sql .= " AND COMPANY_ACTIVITY = :sector";
            $params[':sector'] = $sector;
        }
        if ($skill !== "NoOne") {
            $sql .= " AND INTERNSHIP_SKILLS = :skill";
            $params[':skill'] = $skill;
        }
        if (!empty($city)) {
            $sql .= " AND CITY_NAME = :city";
            $params[':city'] = $city;
        }
        if (!empty($duration)) {
            $sql .= " AND INTERNSHIP_DURATION = :duration";
            $params[':duration'] = $duration;
        }
    
        // Préparez et exécutez la requête SQL
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Retournez le nombre d'offres
        return $result !== false ? intval($result['NUMBER_OFFER']) : 0;
    }
    

    public function getWithLimitParameters($limit, $offset, $name, $sector, $skills, $city, $duration) {
        $sql = ("SELECT
        I.INTERNSHIP_NAME,
        C.COMPANY_IMG
        FROM INTERNSHIP I
        JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
        JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
        JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
        WHERE 1=1
        LIMIT :offset, :Limit;");

        $params = array();

        if (!empty($name)) {
            $sql .= " AND COMPANY_NAME = :name"; 
            $params[':name'] = $name;
        }

        if ($sector !== "NoOne") {
            $sql .= " AND COMPANY_ACTIVITY = :sector";
            $params[':sector'] = $sector;
        }
        if ($skills !== "NoOne") {
            $sql .= " AND INTERNSHIP_SKILLS = :skills";
            $params[':skills'] = $skills;
        }
        if (!empty($city)) {
            $sql .= " AND CITY_NAME = :city";
            $params[':city'] = $city;
        }
        if (!empty($duration)) {
            $sql .= " AND INTERNSHIP_DURATION = :duration";
            $params[':duration'] = $duration;
        }

        // Préparez et exécutez la requête SQL
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getIdOffer() {
        $stmt = $this->pdo->prepare("SELECT ID_INTERNSHIP FROM INTERNSHIP;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
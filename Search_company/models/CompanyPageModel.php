<?php
class CompanyPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getSector() {
        $stmt = $this->pdo->prepare("SELECT DISTINCT COMPANY_ACTIVITY FROM Company;");
        $stmt->execute();
        $sector = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $sector;
    }


    public function getNumberCompany() {
        $stmt = $this->pdo->query("SELECT COUNT(ID_COMPANY) AS NUMBER_ARTICLE FROM COMPANY;");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return intval($result['NUMBER_ARTICLE']);
    }

    public function getCompanyWithLimit($limit, $offset)
    {
        $stmt = $this->pdo->prepare("SELECT COMPANY_NAME,
        COMPANY_DESCRIPTION,
        COMPANY_IMG 
        FROM Company
        LIMIT :offset, :Limit;");
        $stmt->bindParam(':Limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public function getNumberCompanyWithParameters($name, $sector, $city) {
        // Début de la requête SQL
        
        $sql = "SELECT
            COUNT(C.ID_COMPANY) AS NUMBER_COMPANY
            FROM COMPANY C
            JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
            JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
            WHERE 1=1";
    
        // Tableau pour stocker les paramètres de la requête
        $params = array();
    
        // Vérifiez chaque paramètre et ajoutez une condition à la requête si le paramètre n'est pas vide
        if (!empty($name)) {
            $sql .= " AND COMPANY_NAME = :name";
            $params[':name'] = $name;
        }

        if ($sector !== "NoOne") {
            $sql .= " AND COMPANY_ACTIVITY = :sector";
            $params[':sector'] = $sector;
        }
        
        if (!empty($city)) {
            $sql .= " AND CITY_NAME = :city";
            $params[':city'] = $city;
        }
        
    
        // Préparez et exécutez la requête SQL
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        // Retournez le nombre d'offres
        return $result !== false ? intval($result['NUMBER_COMPANY']) : 0;
    }
    

    public function getWithLimitParameters($limit, $offset, $name, $sector, $city) {
        $sql = "SELECT
        C.COMPANY_NAME,
        COMPANY_DESCRIPTION,
        C.COMPANY_IMG
        FROM COMPANY C
        JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
        JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
        WHERE 1=1";

        $params = array();

        if (!empty($name)) {
            $sql .= " AND COMPANY_NAME = :name"; 
            $params[':name'] = $name;
        }

        if ($sector !== "NoOne") {
            $sql .= " AND COMPANY_ACTIVITY = :sector";
            $params[':sector'] = $sector;
        }
        
        if (!empty($city)) {
            $sql .= " AND CITY_NAME = :city";
            $params[':city'] = $city;
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
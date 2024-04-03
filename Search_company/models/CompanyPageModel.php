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

    public function getNumberCompanyWithParameters($name, $sector, $city) {
        $sql = "SELECT
            COUNT(C.ID_COMPANY) AS NUMBER_COMPANY
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
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
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

        $sql .= " LIMIT :offset, :limit";

        $params[':offset'] = $offset;
        $params[':limit'] = $limit;

        $stmt = $this->pdo->prepare($sql);

        foreach ($params as $key => &$val) {
            if (is_int($val)) {
                $stmt->bindParam($key, $val, PDO::PARAM_INT);
            } else {
                $stmt->bindParam($key, $val);
            }
        }
        $stmt->execute();
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
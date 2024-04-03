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

    public function getNumberOfferWithParameters($name, $sector, $skill, $city, $duration) {
        $sql = "SELECT
            COUNT(I.ID_INTERNSHIP) AS NUMBER_OFFER
            FROM INTERNSHIP I
            JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
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

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
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
        ");

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
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
        $stmt = $this->pdo->prepare("SELECT COUNT(ID_INTERNSHIP) AS NUMBER_ARTICLE FROM INTERNSHIP;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numberArticle = $result[0]['NUMBER_ARTICLE'];
        return $numberArticle;
    }

    public function getIdOffer() {
        $stmt = $this->pdo->prepare("SELECT ID_INTERNSHIP FROM INTERNSHIP;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getOfferWithLimit($limit, $offset)
    {
        $stmt = $this->pdo->prepare("SELECT INTERNSHIP_NAME, COMPANY_IMG FROM internship NATURAL JOIN Company LIMIT :offset, :Limit;");
        $stmt->bindParam(':Limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public function getWithLimitParameters($limit, $offset, $name, $sector, $skills, $city, $duration) {
        $conditions = [];
    
        if ($name != "") {$conditions[] = "INTERNSHIP_NAME = :name";}
        if ($sector != "") {$conditions[] = "COMPANY_ACTIVITY = :sector";}
        if ($skills != "") {$conditions[] = "INTERNSHIP_SKILLS = :skills";}
        if ($city != "") {$conditions[] = "INTERNSHIP_CITY = :city";}
        if ($duration != "") {$conditions[] = "INTERNSHIP_DURATION = :duration";}
    
        $condition = "";
        if (!empty($conditions)) {
            $condition = "WHERE " . implode(" AND ", $conditions);
        }
    
        $sql = "SELECT INTERNSHIP_NAME, COMPANY_IMG 
        FROM internship 
        NATURAL JOIN Company 
        $condition
        LIMIT :offset, :Limit;";
    
        $stmt = $this->pdo->prepare($sql);
    
        if ($name != "") {$stmt->bindValue(':name', $name, PDO::PARAM_STR);}
        if ($sector != "") {$stmt->bindValue(':sector', $sector, PDO::PARAM_STR);}
        if ($skills != "") {$stmt->bindValue(':skills', $skills, PDO::PARAM_STR);}
        if ($city != "") {$stmt->bindValue(':city', $city, PDO::PARAM_STR);}
        if ($duration != "") {$stmt->bindValue(':duration', $duration, PDO::PARAM_STR);}
    
        $stmt->bindValue(':Limit', (int)$limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
    
        $stmt->execute();
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
}
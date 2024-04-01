<?php
class OfferPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getNumberOffer() {
        $stmt = $this->pdo->prepare("SELECT COUNT(ID_INTERNSHIP) AS NUMBER_ARTICLE FROM INTERNSHIP;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numberArticle = $result[0]['NUMBER_ARTICLE'];
        return $numberArticle;
    }

    public function getOfferWithLimit($Limit, $offset)
    {
        $stmt = $this->pdo->prepare("SELECT INTERNSHIP_NAME, COMPANY_IMG FROM internship NATURAL JOIN Company LIMIT :offset, :Limit;");
        $stmt->bindParam(':Limit', $Limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
}
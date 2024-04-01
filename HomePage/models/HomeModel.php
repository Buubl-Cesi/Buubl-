<?php
class HomeModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getLastFourCompanies() {
        $stmt = $this->pdo->prepare(/*Requete qui récupère le nom de l'offre ET le logo de l'entreprise des 4 dernières mises en ligne*/);

    
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLastFourAppliedCompanies() {
    $stmt = $this->pdo->prepare(/*Requete qui récupère le nom de l'offre ET le logo de l'entreprise des 4 dernières demandes de l'utilisateur */);
    
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPilotInfo($id) {
        $stmt = $this->pdo->prepare(/*Ici requete SQL qui récupère nom, prénom, info et img du gars connecté pilote*/);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
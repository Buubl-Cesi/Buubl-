<?php
class OfferModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getSector() {
        $stmt = $this->pdo->prepare("SELECT DISTINCT C.COMPANY_ACTIVITY FROM COMPANY C;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllStat() {
        $stmt = $this->pdo->prepare("SELECT 
        I.INTERNSHIP_NAME AS nom,
        C.COMPANY_NAME AS cnom,
        CT.CITY_NAME AS ville,
        C.COMPANY_ACTIVITY AS secteur,
        I.INTERNSHIP_DURATION AS temps,
        I.INTERNSHIP_START_DATE AS deb,
        I.INTERNSHIP_END_DATE AS fin,
        I.INTERNSHIP_SHEDULE AS heure,
        I.INTERNSHIP_REMUNERATION AS euro,
        I.INTERNSHIP_PLACE_NB AS place,
        COUNT(DISTINCT L.ID_LIKES) AS NombreLikes,
        COUNT(DISTINCT AP.ID_APPLICATION) AS NombreApplications
        FROM INTERNSHIP I
        JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
        JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
        JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
        LEFT JOIN LIKES L ON I.ID_INTERNSHIP = L.ID_INTERNSHIP
        LEFT JOIN APPLICATION AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP 
        GROUP BY I.ID_INTERNSHIP
        ORDER BY I.INTERNSHIP_NAME;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllStatWithParam($orderBy, $orderByCrease, $parameter, $sector) {
        if ($orderBy == "Sector") {
            if ($sector == "NoOne") {
                // Appel de la fonction qui trie par secteur sans paramètre
                $stmt = $this->pdo->prepare("SELECT 
                I.INTERNSHIP_NAME AS nom,
                C.COMPANY_NAME AS cnom,
                CT.CITY_NAME AS ville,
                C.COMPANY_ACTIVITY AS secteur,
                I.INTERNSHIP_DURATION AS temps,
                I.INTERNSHIP_START_DATE AS deb,
                I.INTERNSHIP_END_DATE AS fin,
                I.INTERNSHIP_SHEDULE AS heure,
                I.INTERNSHIP_REMUNERATION AS euro,
                I.INTERNSHIP_PLACE_NB AS place,
                COUNT(DISTINCT L.ID_LIKES) AS NombreLikes,
                COUNT(DISTINCT AP.ID_APPLICATION) AS NombreApplications
                FROM INTERNSHIP I
                JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                LEFT JOIN LIKES L ON I.ID_INTERNSHIP = L.ID_INTERNSHIP
                LEFT JOIN APPLICATION AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP 
                GROUP BY I.ID_INTERNSHIP
                ORDER BY secteur ASC;");
            } else {
                // Appel de la fonction qui trie par secteur avec paramètre
                $stmt = $this->pdo->prepare("SELECT 
                I.INTERNSHIP_NAME AS nom,
                C.COMPANY_NAME AS cnom,
                CT.CITY_NAME AS ville,
                C.COMPANY_ACTIVITY AS secteur,
                I.INTERNSHIP_DURATION AS temps,
                I.INTERNSHIP_START_DATE AS deb,
                I.INTERNSHIP_END_DATE AS fin,
                I.INTERNSHIP_SHEDULE AS heure,
                I.INTERNSHIP_REMUNERATION AS euro,
                I.INTERNSHIP_PLACE_NB AS place,
                COUNT(DISTINCT L.ID_LIKES) AS NombreLikes,
                COUNT(DISTINCT AP.ID_APPLICATION) AS NombreApplications
                FROM INTERNSHIP I
                JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                LEFT JOIN LIKES L ON I.ID_INTERNSHIP = L.ID_INTERNSHIP
                LEFT JOIN APPLICATION AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP 
                WHERE C.COMPANY_ACTIVITY = :secteur
                GROUP BY I.ID_INTERNSHIP;");
             $stmt->bindParam(':secteur', $sector);
            }
        } 
        else if ($orderBy == "Localisation") {
            if ($parameter == "") {
                // Appel de la fonction qui trie par localite 
                $stmt = $this->pdo->prepare("SELECT 
                I.INTERNSHIP_NAME AS nom,
                C.COMPANY_NAME AS cnom,
                CT.CITY_NAME AS ville,
                C.COMPANY_ACTIVITY AS secteur,
                I.INTERNSHIP_DURATION AS temps,
                I.INTERNSHIP_START_DATE AS deb,
                I.INTERNSHIP_END_DATE AS fin,
                I.INTERNSHIP_SHEDULE AS heure,
                I.INTERNSHIP_REMUNERATION AS euro,
                I.INTERNSHIP_PLACE_NB AS place,
                COUNT(DISTINCT L.ID_LIKES) AS NombreLikes,
                COUNT(DISTINCT AP.ID_APPLICATION) AS NombreApplications
                FROM INTERNSHIP I
                JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                LEFT JOIN LIKES L ON I.ID_INTERNSHIP = L.ID_INTERNSHIP
                LEFT JOIN APPLICATION AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP 
                GROUP BY I.ID_INTERNSHIP
                ORDER BY CT.CITY_NAME ASC;");
            } else {
                // Appel de la fonction qui trie par localite avec paramètre
                $stmt = $this->pdo->prepare("SELECT 
                I.INTERNSHIP_NAME AS nom,
                C.COMPANY_NAME AS cnom,
                CT.CITY_NAME AS ville,
                C.COMPANY_ACTIVITY AS secteur,
                I.INTERNSHIP_DURATION AS temps,
                I.INTERNSHIP_START_DATE AS deb,
                I.INTERNSHIP_END_DATE AS fin,
                I.INTERNSHIP_SHEDULE AS heure,
                I.INTERNSHIP_REMUNERATION AS euro,
                I.INTERNSHIP_PLACE_NB AS place,
                COUNT(DISTINCT L.ID_LIKES) AS NombreLikes,
                COUNT(DISTINCT AP.ID_APPLICATION) AS NombreApplications
                FROM INTERNSHIP I
                JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                LEFT JOIN LIKES L ON I.ID_INTERNSHIP = L.ID_INTERNSHIP
                LEFT JOIN APPLICATION AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP 
                WHERE CT.CITY_NAME = :parameter
                GROUP BY I.ID_INTERNSHIP;");
                $stmt->bindParam(':parameter', $parameter);
            }
        } 
        else if ($orderBy == "Bestoffer") {
            if ($orderByCrease == "Increasing") {
                // Appel de la fonction qui trie par nombre Bestoffer croissante 
                $stmt = $this->pdo->prepare("SELECT 
                I.INTERNSHIP_NAME AS nom,
                C.COMPANY_NAME AS cnom,
                CT.CITY_NAME AS ville,
                C.COMPANY_ACTIVITY AS secteur,
                I.INTERNSHIP_DURATION AS temps,
                I.INTERNSHIP_START_DATE AS deb,
                I.INTERNSHIP_END_DATE AS fin,
                I.INTERNSHIP_SHEDULE AS heure,
                I.INTERNSHIP_REMUNERATION AS euro,
                I.INTERNSHIP_PLACE_NB AS place,
                COUNT(DISTINCT L.ID_LIKES) AS NombreLikes,
                COUNT(DISTINCT AP.ID_APPLICATION) AS NombreApplications
                FROM INTERNSHIP I
                JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                LEFT JOIN LIKES L ON I.ID_INTERNSHIP = L.ID_INTERNSHIP
                LEFT JOIN APPLICATION AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP 
                GROUP BY I.ID_INTERNSHIP
                ORDER BY NombreLikes ASC;");
                
                   
            } else if ($orderByCrease == "Decreasing") {
                // Appel de la fonction qui trie par nombre Bestoffer décroissante 
                $stmt = $this->pdo->prepare("SELECT 
                I.INTERNSHIP_NAME AS nom,
                C.COMPANY_NAME AS cnom,
                CT.CITY_NAME AS ville,
                C.COMPANY_ACTIVITY AS secteur,
                I.INTERNSHIP_DURATION AS temps,
                I.INTERNSHIP_START_DATE AS deb,
                I.INTERNSHIP_END_DATE AS fin,
                I.INTERNSHIP_SHEDULE AS heure,
                I.INTERNSHIP_REMUNERATION AS euro,
                I.INTERNSHIP_PLACE_NB AS place,
                COUNT(DISTINCT L.ID_LIKES) AS NombreLikes,
                COUNT(DISTINCT AP.ID_APPLICATION) AS NombreApplications
                FROM INTERNSHIP I
                JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                LEFT JOIN LIKES L ON I.ID_INTERNSHIP = L.ID_INTERNSHIP
                LEFT JOIN APPLICATION AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP 
                GROUP BY I.ID_INTERNSHIP
                ORDER BY NombreLikes DESC;");
                
            }
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
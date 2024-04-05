<?php
class CompanyModel {
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
        C.COMPANY_NAME AS nom,
        C.COMPANY_ACTIVITY AS activite, 
        CT.CITY_NAME AS ville,
        C.COMPANY_MARK AS note, 
        COUNT(AP.ID_APPLICATIONS) AS NombreApplications
        FROM COMPANY C
        JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
        JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
        JOIN INTERNSHIP I ON C.ID_COMPANY = I.ID_COMPANY
        JOIN APPLICATIONS AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP
        GROUP BY C.ID_COMPANY;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllStatWithParam($orderBy, $orderByCrease, $parameter, $sector) {
        if ($orderBy == "Sector") {
            if ($sector == "NoOne") {
                // Appel de la fonction qui trie par secteur sans paramètre
                $stmt = $this->pdo->prepare("SELECT 
                C.COMPANY_NAME AS nom,
                C.COMPANY_ACTIVITY AS activite, 
                CT.CITY_NAME AS ville,
                C.COMPANY_MARK AS note, 
                COUNT(AP.ID_APPLICATIONS) AS NombreApplications
                FROM COMPANY C
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                JOIN INTERNSHIP I ON C.ID_COMPANY = I.ID_COMPANY
                JOIN APPLICATIONS AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP
                GROUP BY C.ID_COMPANY
                ORDER BY C.COMPANY_ACTIVITY ASC;");
            } else {
                // Appel de la fonction qui trie par secteur avec paramètre
                $stmt = $this->pdo->prepare("SELECT 
                C.COMPANY_NAME AS nom,
                C.COMPANY_ACTIVITY AS activite, 
                CT.CITY_NAME AS ville,
                C.COMPANY_MARK AS note, 
                COUNT(AP.ID_APPLICATIONS) AS NombreApplications
                FROM COMPANY C
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                JOIN INTERNSHIP I ON C.ID_COMPANY = I.ID_COMPANY
                JOIN APPLICATIONS AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP
                WHERE C.COMPANY_ACTIVITY = :secteur
                GROUP BY C.ID_COMPANY;");
             $stmt->bindParam(':secteur', $sector);
            }
        } 
        else if ($orderBy == "Graduation") {
            if ($parameter == "") {
                if ($orderByCrease == "Increasing") {
                    // Appel de la fonction qui trie par note croissante 
                    $stmt = $this->pdo->prepare("SELECT 
                    C.COMPANY_NAME AS nom,
                    C.COMPANY_ACTIVITY AS activite, 
                    CT.CITY_NAME AS ville,
                    C.COMPANY_MARK AS note, 
                    COUNT(AP.ID_APPLICATIONS) AS NombreApplications
                    FROM COMPANY C
                    JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                    JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                    JOIN INTERNSHIP I ON C.ID_COMPANY = I.ID_COMPANY
                    JOIN APPLICATIONS AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP
                    GROUP BY C.ID_COMPANY
                    ORDER BY C.COMPANY_MARK ASC;");
                    
                       
                } else if ($orderByCrease == "Decreasing") {
                    // Appel de la fonction qui trie par note décroissante 
                    $stmt = $this->pdo->prepare("SELECT 
                    C.COMPANY_NAME AS nom,
                    C.COMPANY_ACTIVITY AS activite, 
                    CT.CITY_NAME AS ville,
                    C.COMPANY_MARK AS note, 
                    COUNT(AP.ID_APPLICATIONS) AS NombreApplications
                    FROM COMPANY C
                    JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                    JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                    JOIN INTERNSHIP I ON C.ID_COMPANY = I.ID_COMPANY
                    JOIN APPLICATIONS AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP
                    GROUP BY C.ID_COMPANY
                    ORDER BY C.COMPANY_MARK DESC;");
                }
            } else {
                // Appel de la fonction qui trie par note avec paramètre
                $stmt = $this->pdo->prepare("SELECT 
                    C.COMPANY_NAME AS nom,
                    C.COMPANY_ACTIVITY AS activite, 
                    CT.CITY_NAME AS ville,
                    C.COMPANY_MARK AS note, 
                    COUNT(AP.ID_APPLICATIONS) AS NombreApplications
                    FROM COMPANY C
                    JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                    JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                    JOIN INTERNSHIP I ON C.ID_COMPANY = I.ID_COMPANY
                    JOIN APPLICATIONS AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP
                    WHERE C.COMPANY_MARK = :parameter
                    GROUP BY C.ID_COMPANY;");
                $stmt->bindParam(':parameter', $parameter);
            }
        } 
        else if ($orderBy == "NumberOffer") {
            if ($orderByCrease == "Increasing") {
                // Appel de la fonction qui trie par nombre offre croissante 
                $stmt = $this->pdo->prepare("SELECT 
                C.COMPANY_NAME AS nom,
                C.COMPANY_ACTIVITY AS activite, 
                CT.CITY_NAME AS ville,
                C.COMPANY_MARK AS note, 
                COUNT(AP.ID_APPLICATIONS) AS NombreApplications
                FROM COMPANY C
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                JOIN INTERNSHIP I ON C.ID_COMPANY = I.ID_COMPANY
                JOIN APPLICATIONS AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP
                GROUP BY C.ID_COMPANY
                ORDER BY NombreApplications ASC;");
                
                   
            } else if ($orderByCrease == "Decreasing") {
                // Appel de la fonction qui trie par nombre offre décroissante 
                $stmt = $this->pdo->prepare("SELECT 
                C.COMPANY_NAME AS nom,
                C.COMPANY_ACTIVITY AS activite, 
                CT.CITY_NAME AS ville,
                C.COMPANY_MARK AS note, 
                COUNT(AP.ID_APPLICATIONS) AS NombreApplications
                FROM COMPANY C
                JOIN ADDRESS A ON C.ID_ADDRESS = A.ID_ADDRESS
                JOIN CITY CT ON A.ID_CITY = CT.ID_CITY
                JOIN INTERNSHIP I ON C.ID_COMPANY = I.ID_COMPANY
                JOIN APPLICATION AP ON I.ID_INTERNSHIP = AP.ID_INTERNSHIP
                GROUP BY C.ID_COMPANY
                ORDER BY NombreApplications DESC;");
                
            }
        }
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
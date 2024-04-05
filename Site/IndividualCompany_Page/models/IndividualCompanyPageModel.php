<?php
class IndividualCompanyPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getCompanyInfo($id) {
    
        $sql = ("SELECT *
            FROM COMPANY C
            JOIN INTERNSHIP I ON I.ID_COMPANY = C.ID_COMPANY
            JOIN ADDRESS A ON A.ID_ADDRESS = C.ID_ADDRESS
            JOIN CITY CT ON CT.ID_CITY = A.ID_CITY
            WHERE C.ID_COMPANY = :id"); 
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCompanyLike($id) {
    
        $sql = ("SELECT count(L.ID_LIKES) AS tot
        FROM LIKES L
        WHERE L.ID_INTERNSHIP IN (SELECT ID_INTERNSHIP FROM INTERNSHIP WHERE ID_COMPANY = :id) 
        "); 
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getCompanycand($id) {
    
        $sql = "SELECT COUNT(A.ID_APPLICATIONS) AS valuee
        FROM APPLICATIONS A
        WHERE A.ID_INTERNSHIP IN (SELECT ID_INTERNSHIP FROM INTERNSHIP WHERE ID_COMPANY = :id)";
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>

<?php
class IndividualCompanyPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getCompanyInfo($id) {
    
        $sql = ("SELECT * FROM COMPANY C
            JOIN ADDRESS A ON A.ID_ADDRESS = C.ID_ADDRESS
            JOIN CITY CT ON CT.ID_CITY = A.ID_CITY
            WHERE ID_COMPANY = :id"); // faut retaper ça pour avoir le nombre d'offre et d'applications
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }
}

?>

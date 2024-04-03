<?php
class IndividualOfferPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getOfferInfo($id) {
    
        $sql = ("SELECT * FROM internship i
        JOIN company c ON c.ID_COMPANY = i.ID_INTERNSHIP
        JOIN ADDRESS A ON A.ID_ADDRESS = C.ID_ADDRESS
        JOIN CITY CT ON CT.ID_CITY = A.ID_CITY
        WHERE i.ID_INTERNSHIP = :id");
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }
}

?>

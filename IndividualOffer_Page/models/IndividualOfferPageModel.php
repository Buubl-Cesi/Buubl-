<?php
class IndividualOfferPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getOfferInfo($id) {
    
        $sql = ("SELECT * FROM COMPANY WHERE ID_COMPANY = :id"); // Faut retapper ça 
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }
}

?>

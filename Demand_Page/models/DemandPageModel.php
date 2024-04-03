<?php
class DemandPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getNumberDemandWithParameters($id) {
    
        $sql = "SELECT count(U.ID_DemandS) AS NUMBER_Demand
        FROM users U
        JOIN Demands S ON U.ID_DemandS = S.ID_DemandS
        WHERE ID_USERS = :id";
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result !== false ? intval($result['NUMBER_DEMAND']) : 0;
    }

    public function getWithLimitParameters($limit, $offset, $id) {
        $sql = ("SELECT USERS_NAME,
        USERS_FNAME,
        Demand_PROMOTION,
        USERS_MAIL,
        USERS_IMG
        FROM users U
        JOIN Demands S ON U.ID_DemandS = S.ID_DemandS
        WHERE ID_USERS = :id
        LIMIT :offset, :limite;");
    
        $stmt = $this->pdo->prepare($sql);
    
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindParam(':limite', $limit, PDO::PARAM_INT);
    
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $result;
    }
}

?>

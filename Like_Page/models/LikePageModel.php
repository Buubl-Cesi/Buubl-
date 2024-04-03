<?php
class LikePageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getNumberLikeWithParameters($id) {
    
        $sql = "SELECT COUNT(L.ID_LIKES) AS NUMBER_LIKE
        FROM LIKES L
        JOIN Avoir A ON L.ID_LIKES = A.ID_LIKES
        WHERE A.ID_STUDENTS = :id
        ;";
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result !== false ? intval($result['NUMBER_LIKE']) : 0;
    }

    public function getWithLimitParameters($limit, $offset, $id) {
        $sql = ("SELECT C.COMPANY_NAME, I.INTERNSHIP_NAME
        FROM Avoir A
        JOIN LIKES L ON A.ID_LIKES = L.ID_LIKES
        JOIN INTERNSHIP I ON L.ID_INTERNSHIP = I.ID_INTERNSHIP
        JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
        WHERE A.ID_STUDENTS = :id;
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

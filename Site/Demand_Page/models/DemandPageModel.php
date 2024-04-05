<?php
class DemandPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getNumberDemandWithParameters($id) {
    
        $sql = "SELECT COUNT(A.ID_APPLICATIONS) AS NUMBER_DEMAND
        FROM APPLICATIONS A
        WHERE A.ID_STUDENTS = (
            SELECT S.ID_STUDENTS 
            FROM USERS U
            LEFT JOIN STUDENTS S ON U.ID_STUDENTS = S.ID_STUDENTS 
            WHERE U.ID_USERS = :id)";
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result !== false ? intval($result['NUMBER_DEMAND']) : 0;
    }

    public function getWithLimitParameters($limit, $offset, $id) {
        $sql = ("SELECT COMPANY_NAME,
        INTERNSHIP_NAME,
        APPLICATIONS_STATUS
        FROM APPLICATIONS A
        JOIN STUDENTS S ON A.ID_STUDENTS = S.ID_STUDENTS
        JOIN INTERNSHIP I ON I.ID_INTERNSHIP = A.ID_INTERNSHIP
        JOIN COMPANY C ON I.ID_COMPANY = C.ID_COMPANY
        WHERE A.ID_STUDENTS = (
            SELECT S.ID_STUDENTS 
            FROM USERS U
            LEFT JOIN STUDENTS S ON U.ID_STUDENTS = S.ID_STUDENTS 
            WHERE U.ID_USERS = :id)
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

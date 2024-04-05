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

//LIKE-------------------------------------------------------------------

    public function verif($id, $id_inter) {
    
        $sql = ("SELECT
        count(LIKES.ID_LIKES) AS val
        FROM LIKES
        JOIN Avoir ON LIKES.ID_LIKES = Avoir.ID_LIKES
        JOIN STUDENTS ON Avoir.ID_STUDENTS = STUDENTS.ID_STUDENTS
        WHERE STUDENTS.ID_STUDENTS = (SELECT ID_STUDENTS FROM USERS where ID_USERS = :id) AND LIKES.ID_INTERNSHIP = :id_inter");
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':id_inter', $id_inter, PDO::PARAM_INT);

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function AjoutLike($id_inter) {
    
        $sql = ("INSERT INTO LIKES (ID_INTERNSHIP) VALUES (:id_inter);");
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id_inter', $id_inter, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function AjoutAvoir($id) {
    
        $sql = ("INSERT INTO Avoir (ID_LIKES, ID_STUDENTS)VALUES ((SELECT MAX(ID_LIKES)FROM LIKES),(SELECT ID_STUDENTS FROM USERS where ID_USERS = :id))");
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function RecupAvoir($id, $id_intern) {
        
        $sql = ("SELECT A.ID_LIKES AS id
        FROM Avoir A
        JOIN LIKES L ON A.ID_LIKES = L.ID_LIKES
        WHERE A.ID_STUDENTS = (SELECT ID_STUDENTS FROM USERS where ID_USERS = :id) AND L.ID_INTERNSHIP = :id_inter");
        
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':id_inter', $id_intern, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        }

    public function DeleteAvoir($id) {
        
        $sql = ("DELETE FROM Avoir WHERE ID_LIKES = :id");
        
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        }

    public function DeleteLike($id) {
    
        $sql = ("DELETE FROM LIKES WHERE ID_LIKES = :id");
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

//APPLICATION-------------------------------------------------------------------
    public function VerifApplication($id, $id_inter) {
        
        $sql = ("SELECT COUNT(ID_APPLICATIONS) AS NombreApplications
        FROM APPLICATIONS
        WHERE ID_STUDENTS = (SELECT ID_STUDENTS FROM USERS where ID_USERS = :id) AND ID_INTERNSHIP = :id_inter;");

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':id_inter', $id_inter, PDO::PARAM_INT);

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function AjoutApplication($id, $id_inter) {
    
        $sql = ("INSERT INTO APPLICATIONS (ID_STUDENTS, ID_INTERNSHIP, APPLICATIONS_STATUS) 
        VALUES ((SELECT ID_STUDENTS FROM USERS where ID_USERS = :id), :id_inter, 1);");
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':id_inter', $id_inter, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function DeleteApplication($id, $id_inter) {
    
        $sql = ("DELETE FROM APPLICATIONS
        WHERE ID_STUDENTS = (SELECT ID_STUDENTS FROM USERS where ID_USERS = :id) AND ID_INTERNSHIP = :id_inter");
    
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':id_inter', $id_inter, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
}

?>

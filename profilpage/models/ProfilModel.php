<?php
class ProfilModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getprofil($id) {
        $stmt = $this->pdo->prepare("SELECT U.USERS_NAME AS nom,
        U.USERS_IMG AS ing,
        U.USERS_FNAME AS prenom,
        U.USERS_MAIL AS mail,
        U.USERS_LOGIN AS logn,
        A.ADDRESS_STREET AS adresse,
        C.CITY_NAME AS ville
        FROM USERS U
        JOIN ADDRESS A ON U.ID_ADDRESS = A.ID_ADDRESS
        JOIN CITY C ON A.ID_CITY = C.ID_CITY
        WHERE U.ID_USERS = :id ;");
        
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $prenom, $nom, $email, $adresse, $ville, $login) {
        $stmt = $this->pdo->prepare("UPDATE USERS
        SET USERS_NAME = :nom,
            USERS_FNAME = :prenom,
            USERS_MAIL = :email,
            USERS_LOGIN = :logine
        WHERE ID_USERS = :id;
        
        UPDATE ADDRESS
        SET ADDRESS_STREET = :adresse
        WHERE ID_ADDRESS = (SELECT ID_ADDRESS FROM USERS WHERE ID_USERS = :id);
        
        UPDATE CITY
        SET CITY_NAME = :ville
        WHERE ID_CITY = (SELECT ID_CITY FROM ADDRESS WHERE ID_ADDRESS = (SELECT ID_ADDRESS FROM USERS WHERE ID_USERS = :id));");
        
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':logine', $login);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
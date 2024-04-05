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

}
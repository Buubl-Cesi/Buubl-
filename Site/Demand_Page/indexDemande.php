<?php
require_once('controllers/DemandPageController.php');

function Connexion() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=Buubl', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}


$pdo = Connexion();
$Controller = new DemandPageController($pdo);


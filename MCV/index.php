<?php
require_once('controllers/LoginController.php');

function Connexion() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=Buubl', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}


// Affichage initial
$pdo = Connexion();
$Controller = new LoginController($pdo);



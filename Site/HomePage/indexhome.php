<?php
require_once('controllers/HomeController.php');

function Connexion() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=buubl', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}


// Affichage initial
$pdo = Connexion();
$homeController = new HomeController($pdo);



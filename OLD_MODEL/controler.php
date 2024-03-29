<?php
require('pdo.php');

function ShowAllPilots() {
    $pdo = Connexion();
    $pilots = new Student($pdo);
    $pilots->showPilots();
    Deconnexion();
}

function Connexion() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=prosit7', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pilots = new Student($pdo); // Créer une instance de la classe Pilots
        $allPilots = $pilots->getAllStat(); // Appeler la méthode getAllPilots
    }
    catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage()); // Gestion des erreurs, permet de donner l'exeption stockée dans $e
    }
    return $pdo;
}


function Deconnexion() {
    $conn = null; // Ferme la connexion
}
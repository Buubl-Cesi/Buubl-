<?php
require_once('controller/DashboardAController.php');

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
$dashboardAController = new DashboardAController($pdo);

?>

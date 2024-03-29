<?php

class Student {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllPilots() {
        $stmt = $this->pdo->prepare("SELECT ID_USER, STUDENT_NAME, STUDENT_FNAME FROM _user;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function showPilots() {
        $allStudents = $this->getAllPilots(); // Assurez-vous que cette méthode exécute la requête adéquate
        echo "<table>";
        // Modifier les en-têtes de colonnes en fonction des nouvelles données à afficher
        echo "<tr><th>Nom</th><th>Prénom</th><th>Promotion</th><th>Compteur</th></tr>";
        foreach ($allStudents as $student) {
            echo "<tr>";
            // Assurez-vous que les clés d'accès correspondent aux noms des colonnes dans votre requête SQL ou au résultat de la méthode getAllStudents()
            echo "<td>" . $student['ID_USER'] . "</td>";
            echo "<td>" . $student['STUDENT_NAME'] . "</td>";
            echo "<td>" . $student['STUDENT_FNAME'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
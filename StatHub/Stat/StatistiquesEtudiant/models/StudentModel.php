<?php
class StudentModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllStat() {

        // La tu met la requete qui affiche tout les étudiants et leur activité sans filtres
        $stmt = $this->pdo->prepare("SELECT 
                u.STUDENT_NAME AS Nom,
                u.STUDENT_FNAME AS Prenom,
                p.PROMOTION_NAME AS Promotion,
                s.STUDENTS_CMPT AS Compteur
            FROM
                STUDENTS s
            JOIN
                _USER u ON s.ID_USER = u.ID_USER
            LEFT JOIN
                PROMOTION p ON s.ID_PROMOTION = p.ID_PROMOTION;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllStatWithParam($orderBy, $orderByCrease, $parameter) {
        $stmt = $this->pdo->prepare("SELECT 
        u.STUDENT_NAME AS Nom,
        u.STUDENT_FNAME AS Prenom,
        p.PROMOTION_NAME AS Promotion,
        s.STUDENTS_CMPT AS Compteur
    FROM
        STUDENTS s
    JOIN
        _USER u ON s.ID_USER = u.ID_USER
    LEFT JOIN
        PROMOTION p ON s.ID_PROMOTION = p.ID_PROMOTION
    WHERE 
        u.STUDENT_NAME = :parameter
    ");

    if ($orderBy == "Name" || $orderBy == "Surname") {
        if ($parameter == "") {
            // Appel de la fonction qui trie par nom sans paramètre
        } else {
            // Appel de la fonction qui trie par nom avec paramètre
        }
    } else if ($orderByCrease == "Promotion") {
        if ($parameter == "") {
            // Appel de la fonction qui trie par promotion sans paramètre
        } else {
            // Appel de la fonction qui trie par promotion avec paramètre
        }
    } else if ($orderByCrease == "Activity") {
        if ($orderBy == "Increasing") {
            if ($parameter == "") {
                // Appel de la fonction qui trie par activité croissante sans paramètre
            } else {
                // Appel de la fonction qui trie par activité croissante avec paramètre
            }
        } else if ($orderBy == "Decreasing") {
            if ($parameter == "") {
                // Appel de la fonction qui trie par activité décroissante sans paramètre
            } else {
                // Appel de la fonction qui trie par activité décroissante avec paramètre
            }
        }
    }


    
        $stmt->bindParam(':parameter', $parameter);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
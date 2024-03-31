<?php
class StudentModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllStat() {
        // La tu met la requete qui affiche tout les étudiants et leur activité sans filtres
        $stmt = $this->pdo->prepare("SELECT 
        u.USERS_NAME AS Nom,
        u.USERS_FNAME AS Prenom,
        s.STUDENT_PROMOTION AS Promo,
        COUNT(DISTINCT a.ID_APPLICATION) AS Nombre_Stage, 
        COUNT(DISTINCT l.ID_LIKES) AS Nombre_Likes
        FROM USERS u
        JOIN STUDENTS s ON u.ID_USERS = s.ID_STUDENTS 
        LEFT JOIN APPLICATION a ON s.ID_STUDENTS = a.ID_STUDENTS
        LEFT JOIN INTERNSHIP i ON a.ID_INTERNSHIP = i.ID_INTERNSHIP
        LEFT JOIN LIKES l ON i.ID_INTERNSHIP = l.ID_INTERNSHIP
        GROUP BY u.ID_USERS
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllStatWithParam($orderBy, $orderByCrease, $parameter) {
        
    if ($orderBy == "Name" || $orderBy == "Surname") {
        if ($parameter == "") {
            // Appel de la fonction qui trie par nom sans paramètre
            $stmt = $this->pdo->prepare("SELECT 
            u.USERS_NAME AS Nom,
            u.USERS_FNAME AS Prenom,
            s.STUDENT_PROMOTION AS Promo,
            COUNT(DISTINCT a.ID_APPLICATION) AS Nombre_Stage, 
            COUNT(DISTINCT l.ID_LIKES) AS Nombre_Likes
            FROM USERS u
            JOIN STUDENTS s ON u.ID_USERS = s.ID_STUDENTS 
            LEFT JOIN APPLICATION a ON s.ID_STUDENTS = a.ID_STUDENTS
            LEFT JOIN INTERNSHIP i ON a.ID_INTERNSHIP = i.ID_INTERNSHIP
            LEFT JOIN LIKES l ON i.ID_INTERNSHIP = l.ID_INTERNSHIP
            GROUP BY u.ID_USERS
            ORDER BY U.USERS_NAME ASC;
        ");
        } else {
            // Appel de la fonction qui trie par nom avec paramètre
            $stmt = $this->pdo->prepare("SELECT 
            u.USERS_NAME AS Nom,
            u.USERS_FNAME AS Prenom,
            s.STUDENT_PROMOTION AS Promo,
            COUNT(DISTINCT a.ID_APPLICATION) AS Nombre_Stage, 
            COUNT(DISTINCT l.ID_LIKES) AS Nombre_Likes
            FROM USERS u
            JOIN STUDENTS s ON u.ID_USERS = s.ID_STUDENTS 
            LEFT JOIN APPLICATION a ON s.ID_STUDENTS = a.ID_STUDENTS
            LEFT JOIN INTERNSHIP i ON a.ID_INTERNSHIP = i.ID_INTERNSHIP
            LEFT JOIN LIKES l ON i.ID_INTERNSHIP = l.ID_INTERNSHIP
            WHERE u.USERS_NAME = :parameter OR u.USERS_FNAME = :parameter -- Remplacer NomRecherche et PrenomRecherche par les termes de recherche
            GROUP BY u.ID_USERS
            ORDER BY U.USERS_NAME ASC;
        ");
         $stmt->bindParam(':parameter', $parameter);
        }
    } else if ($orderBy == "Promotion") {
        if ($parameter == "") {
            // Appel de la fonction qui trie par promotion sans paramètre
            $stmt = $this->pdo->prepare("SELECT 
            u.USERS_NAME AS Nom,
            u.USERS_FNAME AS Prenom,
            s.STUDENT_PROMOTION AS Promo,
            COUNT(DISTINCT a.ID_APPLICATION) AS Nombre_Stage, 
            COUNT(DISTINCT l.ID_LIKES) AS Nombre_Likes
            FROM USERS u
            JOIN STUDENTS s ON u.ID_USERS = s.ID_STUDENTS 
            LEFT JOIN APPLICATION a ON s.ID_STUDENTS = a.ID_STUDENTS
            LEFT JOIN INTERNSHIP i ON a.ID_INTERNSHIP = i.ID_INTERNSHIP
            LEFT JOIN LIKES l ON i.ID_INTERNSHIP = l.ID_INTERNSHIP
            GROUP BY u.ID_USERS
            ORDER BY S.STUDENT_PROMOTION ASC;");
        } else {
            // Appel de la fonction qui trie par promotion avec paramètre
            $stmt = $this->pdo->prepare("SELECT 
            u.USERS_NAME AS Nom,
            u.USERS_FNAME AS Prenom,
            s.STUDENT_PROMOTION AS Promo,
            COUNT(DISTINCT a.ID_APPLICATION) AS Nombre_Stage, 
            COUNT(DISTINCT l.ID_LIKES) AS Nombre_Likes
            FROM USERS u
            JOIN STUDENTS s ON u.ID_USERS = s.ID_STUDENTS 
            LEFT JOIN APPLICATION a ON s.ID_STUDENTS = a.ID_STUDENTS
            LEFT JOIN INTERNSHIP i ON a.ID_INTERNSHIP = i.ID_INTERNSHIP
            LEFT JOIN LIKES l ON i.ID_INTERNSHIP = l.ID_INTERNSHIP            
            WHERE S.STUDENT_PROMOTION = :parameter -- Remplacer NomRecherche et PrenomRecherche par les termes de recherche
            GROUP BY u.ID_USERS
            ORDER BY S.STUDENT_PROMOTION ASC;");
            $stmt->bindParam(':parameter', $parameter);
        }
    } else if ($orderBy == "Activity") {
        if ($orderByCrease == "Increasing") {
            // Appel de la fonction qui trie par activité croissante 
            $stmt = $this->pdo->prepare("SELECT 
            u.USERS_NAME AS Nom,
            u.USERS_FNAME AS Prenom,
            s.STUDENT_PROMOTION AS Promo,
            COUNT(DISTINCT a.ID_APPLICATION) AS Nombre_Stage, 
            COUNT(DISTINCT l.ID_LIKES) AS Nombre_Likes,
            (COUNT(DISTINCT A.ID_APPLICATION) + COUNT(DISTINCT L.ID_LIKES)) AS activite
            FROM USERS u
            JOIN STUDENTS s ON u.ID_USERS = s.ID_STUDENTS 
            LEFT JOIN APPLICATION a ON s.ID_STUDENTS = a.ID_STUDENTS
            LEFT JOIN INTERNSHIP i ON a.ID_INTERNSHIP = i.ID_INTERNSHIP
            LEFT JOIN LIKES l ON i.ID_INTERNSHIP = l.ID_INTERNSHIP            
            GROUP BY u.ID_USERS
            ORDER BY activite ASC;");
            
               
        } else if ($orderByCrease == "Decreasing") {
            // Appel de la fonction qui trie par activité décroissante avec paramètre
            $stmt = $this->pdo->prepare("SELECT 
            u.USERS_NAME AS Nom,
            u.USERS_FNAME AS Prenom,
            s.STUDENT_PROMOTION AS Promo,
            COUNT(DISTINCT a.ID_APPLICATION) AS Nombre_Stage, 
            COUNT(DISTINCT l.ID_LIKES) AS Nombre_Likes,
            (COUNT(DISTINCT A.ID_APPLICATION) + COUNT(DISTINCT L.ID_LIKES)) AS activite
            FROM USERS u
            JOIN STUDENTS s ON u.ID_USERS = s.ID_STUDENTS 
            LEFT JOIN APPLICATION a ON s.ID_STUDENTS = a.ID_STUDENTS
            LEFT JOIN INTERNSHIP i ON a.ID_INTERNSHIP = i.ID_INTERNSHIP
            LEFT JOIN LIKES l ON i.ID_INTERNSHIP = l.ID_INTERNSHIP            
            GROUP BY u.ID_USERS
            ORDER BY activite DESC;");
            
        }
    }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
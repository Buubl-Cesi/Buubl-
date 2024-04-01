<?php
class LoginModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function checkmdp($login, $password) {
        if (!empty($login)) {
            $stmt = $this->pdo->prepare("SELECT USERS_PASSWORD AS mdp FROM USERS WHERE USERS_LOGIN = :logi");
            $stmt->bindParam(':logi', $login);
            $stmt->execute();
            $row = $stmt->fetch();
    
            if ($password == $row['mdp']) {
                echo "AAA";
                return true;
            } else {
                echo "rrr";
                return false;
            }
        } else {
            echo "rrr";
            return false;
        }
    }
}
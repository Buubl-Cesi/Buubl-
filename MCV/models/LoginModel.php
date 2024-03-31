<?php
class LoginModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function checkmdp($login, $password) {
        $stmt = $this->pdo->prepare("SELECT USERS_PASSWORD FROM USERS WHERE USERS_LOGIN = :logi");
        $stmt->bindParam(':logi', $login);
        $stmt->execute();
        
        if ($row = $stmt->fetch()) {
            if (password_verify($password, $row['USERS_PASSWORD'])) {
                return true; 
            }
        }
        return false; 
    }
}
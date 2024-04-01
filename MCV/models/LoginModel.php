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
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function checkadmin($login) {
            $stmt = $this->pdo->prepare("SELECT ID_ADMIN AS admn FROM USERS WHERE USERS_LOGIN = :logi");
            $stmt->bindParam(':logi', $login);
            $stmt->execute();
            $row = $stmt->fetch();
    
            if ($row['admn'] !== NULL) {
                return true;
            } else {
                return false;
            }
    } 

    public function checkid($login) {
        $stmt = $this->pdo->prepare("SELECT ID_USERS AS id FROM USERS WHERE USERS_LOGIN = :logi");
        $stmt->bindParam(':logi', $login);
        $stmt->execute();
        $row = $stmt->fetch();
        $res = $row['id'];
        return $res;
} 
    
}
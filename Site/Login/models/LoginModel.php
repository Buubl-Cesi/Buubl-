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
            $stmt = $this->pdo->prepare("SELECT ID_ADMIN AS admi, 
            ID_STUDENTS AS student,
            ID_PILOT AS pilot
            FROM USERS WHERE USERS_LOGIN = :logi");
            $stmt->bindParam(':logi', $login);
            $stmt->execute();
            $row = $stmt->fetch();
    
            if ($row['admi'] !== NULL & $row['pilot'] == NULL & $row['student'] == NULL) {
                return 1;
            } 
            else if ($row['pilot'] !== NULL & $row['admi'] == NULL & $row['student'] == NULL){
                return 2;
            }
            else if ($row['student'] !== NULL & $row['admi'] == NULL & $row['pilot'] == NULL){
                return 3;
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
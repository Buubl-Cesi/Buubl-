<?php
session_start();
require_once('models/LoginModel.php');
require_once('libs/Smarty.class.php');

class LoginController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new LoginModel($pdo);
        $this->smarty = new Smarty;
    }

    public function showLog() {
        $this->smarty->display('views/templates/login.tpl');
    }

    public function verifyLogin($login, $password) {
        if ($this->model->checkmdp($login, $password)) {
            echo "Connexion réussie!<br>";
            if ($this->model->checkadmin($login)) {
                $_SESSION['id'] = $this->model->checkid($login);
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['isAdmin'] = true;
                print_r($_SESSION);
            }
            else{
                $_SESSION['id'] = $this->model->checkid($login);
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['isAdmin'] = false;
                print_r($_SESSION);
            }
        } 
        else {
            echo "Échec de la connexion. Veuillez vérifier vos identifiants.<br>";
        }
        
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = isset($_POST["login"]) ? $_POST["login"] : '';
    $password = isset($_POST["Password"]) ? $_POST["Password"] : '';

    $pdo = Connexion();
    $Controller = new LoginController($pdo);
    $Controller->verifyLogin($login, $password);
} 
else {
    $pdo = Connexion();
    $Controller = new LoginController($pdo);
    $Controller->showLog();
    echo "non verification";
}
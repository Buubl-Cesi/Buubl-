<?php
session_start();
$_SESSION['isLoggedIn'] = 0;
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
            
            if ($this->model->checkadmin($login) == 1) { //admin
                $_SESSION['id'] = $this->model->checkid($login);
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['status'] = 1;
                //print_r($_SESSION);
                header('Location: ../Homepage/indexhome.php');
                exit; 
                
            }
            else if ($this->model->checkadmin($login) == 2) {  //pilote
                $_SESSION['id'] = $this->model->checkid($login);
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['status'] = 2;
                //print_r($_SESSION);
                header('Location: ../Homepage/indexhome.php');
                exit; 
            }
            else if ($this->model->checkadmin($login) == 3) {  //student
                $_SESSION['id'] = $this->model->checkid($login);
                $_SESSION['isLoggedIn'] = true;
                $_SESSION['status'] = 3;
                //print_r($_SESSION);
                header('Location: ../Homepage/indexhome.php');
                exit; 
            }
        } 
        else {
            $this->smarty->display('views/templates/login.tpl');
            echo "<script>alert('Échec de la connexion. Veuillez vérifier vos identifiants.');</script>";
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
    
}
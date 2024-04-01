<?php
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
            echo "Connexion réussie!";
        } else {
            echo "Échec de la connexion. Veuillez vérifier vos identifiants.";
        }
        $this->smarty->display('views/templates/login.tpl');
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = isset($_POST["login"]) ? $_POST["login"] : '';
    $password = isset($_POST["Password"]) ? $_POST["Password"] : '';

    $pdo = Connexion();
    $Controller = new LoginController($pdo);
    $Controller->verifyLogin($login, $password);
    echo "verification";
} 
else {
    $pdo = Connexion();
    $Controller = new LoginController($pdo);
    $Controller->showLog();
    echo "non verification";
}
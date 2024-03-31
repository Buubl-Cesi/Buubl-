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

    public function verifyLogin() {
        $this->smarty->display('views/templates/Login.tpl');
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        
        if ($this->model->checkmdp($login, $password)) {
            echo "Connexion réussie!";
        } else {
            echo "Échec de la connexion. Veuillez vérifier vos identifiants.";
        }
    }
    

}
$pdo = Connexion();
$Controller = new LoginController($pdo);
$Controller->verifyLogin();



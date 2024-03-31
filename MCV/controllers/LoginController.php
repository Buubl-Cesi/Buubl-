<?php
require_once('models/LoginModel.php');
require_once('libs/Smarty.class.php');

class LoginController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new HubModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function showStats() {
        $stats = $this->model->getAllStat();
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('views/templates/Login.tpl');
    }
    

}
$pdo = Connexion();
$hubController = new LoginController($pdo);
$hubController->showStats();


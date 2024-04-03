<?php
session_start();
require_once('models/HubModel.php');
require_once('libs/Smarty.class.php');

class HubController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new HubModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function showStats($navbar) {
        $stats = $this->model->getAllStat();
        $this->smarty->assign('stats', $stats);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/hub.tpl');
    }
    

}
if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['isAdmin'] == 1){
        $navbar = '../../navbar/navbar_admin.tpl';
        $pdo = Connexion();
        $hubController = new HubController($pdo);
        $hubController->showStats($navbar);
        
    }
    else if ($_SESSION['isAdmin'] == 0) {
        $navbar = '../../navbar/navbar.tpl';
        $pdo = Connexion();
        $hubController = new HubController($pdo);
        $hubController->showStats($navbar);
       
    }
}
else{
    echo"erreur 404";
}



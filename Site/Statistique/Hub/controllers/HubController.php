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
    if ($_SESSION['status'] == 1){
        $navbar = '../../../Navbar/navbar_admin.tpl';
        $pdo = Connexion();
        $hubController = new HubController($pdo);
        $hubController->showStats($navbar);
       
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $navbar = '../../../Navbar/navbar.tpl';
        $pdo = Connexion();
        $hubController = new HubController($pdo);
        $hubController->showStats($navbar);
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}



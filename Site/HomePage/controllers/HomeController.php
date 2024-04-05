<?php
session_start();
require_once('models/HomeModel.php');
require_once('libs/Smarty.class.php');

class HomeController {
    private $model;
    private $smarty;
    public $id;

    public function __construct($pdo) { 
        $this->model = new HomeModel($pdo);
        $this->smarty = new Smarty; 
    }
    
    public function LoadPage($navbar, $user) {

        $id = $_SESSION['status'];
        
        $LastAdded = $this->model->getLastFourCompanies();
        $LastApplied = $this->model->getLastFourAppliedCompanies($user);
        $PilotInfo = $this->model->getPilotInfo($user);

        $button = '';
        if ($id == 2) {
            $button = '
            
            <a href="../../../../StatistiquesEtudiantPilot/index.php">    
            <button type="submit" value="redirectStat" class="button-redirect" >Statistique pilote</button>
            </a>';
        } else {
            $button = '';
        }
    
        $this->smarty->assign('LastAdded', $LastAdded);
        $this->smarty->assign('LastLiked', $LastApplied);
        $this->smarty->assign('PilotInfo', $PilotInfo);
        $this->smarty->assign('button', $button); 

        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/home.tpl');
    }
}


if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['status'] == 1){
        $user = $_SESSION['id'];
        $navbar = '../Navbar/navbar_admin.tpl';
        $pdo = Connexion();
        $homeController = new HomeController($pdo);
        $homeController->LoadPage($navbar, $user);
       
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $user = $_SESSION['id'];
        $navbar = '../Navbar/navbar.tpl';
        $pdo = Connexion();
        $homeController = new HomeController($pdo);
        $homeController->LoadPage($navbar, $user);
        
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}




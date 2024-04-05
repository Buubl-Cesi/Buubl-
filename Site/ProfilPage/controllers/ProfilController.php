<?php
session_start();
require_once('models/ProfilModel.php');
require_once('libs/Smarty.class.php');

class ProfilController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new ProfilModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function LoadPage($id, $navbar) {
        $info = $this->model->getprofil($id);
        $this->smarty->assign('info', $info);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/profil.tpl');
    }

}
if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['status'] == 1){
        $navbar = '../Navbar/navbar_admin.tpl';
        $id = $_SESSION['id'];
        $pdo = Connexion();
        $ProfilController = new ProfilController($pdo);
        $ProfilController->LoadPage($id, $navbar);
       
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $navbar = '../Navbar/navbar.tpl';
        $id = $_SESSION['id'];
        $pdo = Connexion();
        $ProfilController = new ProfilController($pdo);
        $ProfilController->LoadPage($id, $navbar);
        
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}




    
   
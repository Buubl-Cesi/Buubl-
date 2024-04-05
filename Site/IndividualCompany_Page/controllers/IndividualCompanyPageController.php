<?php
session_start();
require_once('models/IndividualCompanyPageModel.php');
require_once('libs/Smarty.class.php');

class IndividualCompanyPageController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new IndividualCompanyPageModel($pdo);
        $this->smarty = new Smarty;
    }


    public function getCompanyInfo($id) {
        
        $IndividualCompany = $this->model->getCompanyInfo($id);
        $IndividualLike = $this->model->getCompanyLike($id);
        $IndividualCand = $this->model->getCompanycand($id);
        $this->smarty->assign('IndividualCompany', $IndividualCompany);
        $this->smarty->assign('IndividualLike', $IndividualLike);
        $this->smarty->assign('IndividualCand', $IndividualCand);
        
    }


    public function display($navbar) {
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/company.tpl');
    }
}
if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['status'] == 1){
        $navbar = '../Navbar/navbar_admin.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = isset($_GET['id']) ? intval($_GET['id']) : null;
            
            $pdo = Connexion();
            $controller = new IndividualCompanyPageController($pdo);
        
            $company = $controller->getCompanyInfo($id);
            $controller->display($navbar);
        }
       
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $navbar = '../Navbar/navbar.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = isset($_GET['id']) ? intval($_GET['id']) : null;
            
            $pdo = Connexion();
            $controller = new IndividualCompanyPageController($pdo);
        
            $company = $controller->getCompanyInfo($id);
            $controller->display($navbar);
        }
        
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}

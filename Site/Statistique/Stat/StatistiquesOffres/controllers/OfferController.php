<?php
session_start();
require_once('models/OfferModel.php');
require_once('libs/Smarty.class.php');

class OfferController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new OfferModel($pdo);
        $this->smarty = new Smarty;
        $this->getSector();
    }
    
    public function getSector() {
        $sectors = $this->model->getSector();
        $this->smarty->assign('sector', $sectors);
    }

    public function showStats($navbar) {
        $stats = $this->model->getAllStat();
        $this->smarty->assign('stats', $stats);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/stat_offer.tpl');
    }
    
    public function showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector, $navbar) {
        $stats = $this->model->getAllStatWithParam($orderBy, $orderByCrease, $parameter, $sector);
        $this->smarty->assign('stats', $stats);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/stat_offer.tpl');
    }
}
// gestion du formulaire pour retourner les valeurs
if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['status'] == 1){
        $navbar = '../../../navbar/navbar_admin.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $orderBy = isset($_POST["Orderby"]) ? $_POST["Orderby"] : '';
            $orderByCrease = isset($_POST["OrderByCrease"]) ? $_POST["OrderByCrease"] : '';
            $parameter = isset($_POST["parameter"]) ? $_POST["parameter"] : '';
            $sector = isset($_POST["sector"]) ? $_POST["sector"] : '';
        
            $pdo = Connexion();
            $controller = new OfferController($pdo);
            $controller->showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector, $navbar);
        } else {
            $pdo = Connexion();
            $controller = new OfferController($pdo);
            $controller->showStats($navbar);
        }
        
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $navbar = '../../../navbar/navbar.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $orderBy = isset($_POST["Orderby"]) ? $_POST["Orderby"] : '';
            $orderByCrease = isset($_POST["OrderByCrease"]) ? $_POST["OrderByCrease"] : '';
            $parameter = isset($_POST["parameter"]) ? $_POST["parameter"] : '';
            $sector = isset($_POST["sector"]) ? $_POST["sector"] : '';
        
            $pdo = Connexion();
            $controller = new OfferController($pdo);
            $controller->showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector, $navbar);
        } else {
            $pdo = Connexion();
            $controller = new OfferController($pdo);
            $controller->showStats($navbar);
        }
       
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}


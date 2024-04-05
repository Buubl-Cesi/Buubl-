<?php
session_start();
require_once('models/DemandPageModel.php');
require_once('libs/Smarty.class.php');

class DemandPageController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new DemandPageModel($pdo);
        $this->smarty = new Smarty;
    }


    public function getNumberDemandWithParameters($id) {
        $numberDemand = $this->model->getNumberDemandWithParameters($id);
        $this->smarty->assign('numberDemand', $numberDemand);
        return $numberDemand;
    }


    public function getWithLimitParameters($currentPage, $limit, $id) {
        $offset = ($currentPage - 1) * $limit;
        $Demands = $this->model->getWithLimitParameters($limit, $offset, $id);
        $this->smarty->assign('Demand', $Demands);
        return $Demands;
    }

    public function display($NumberPage, $currentPage, $navbar) {
        $this->smarty->assign('numberPages', $NumberPage);
        $this->smarty->assign('currentPage', $currentPage);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/application.tpl');
    }

    /*
    public function generateDemandPage() {
        $idOffer = $this->model->getIdDemand();
        return $idOffer;
    }
    */

    public function GiveParameters($id) {
        $parameters = array(
            'id' => $id,
        );
        $this->smarty->assign('id', $id);
    }

    public function assignRequest($request) {
        $this->smarty->assign('queryString', $request);
    }
}

if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['status'] == 1){
        $navbar = '../Navbar/navbar_admin.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $page = isset($_GET['p']) ? intval($_GET['p']) : 1;
        
        
            $id = 1; // factice, faudra récupérer dans les logs
        
            $limit = 5;
            $offset = ($page - 1) * $limit;
        
            $pdo = Connexion();
            $controller = new DemandPageController($pdo);
        
            $queryParams = $_GET;
            unset($queryParams['p']);
            $queryString = http_build_query($queryParams);
            
            $controller->assignRequest($queryString);
        
            $NumberOffer = $controller->getNumberDemandWithParameters($id);
            $offers = $controller->getWithLimitParameters($page, $limit, $id);
            
        
            $NumberPage = ceil($NumberOffer / $limit);
        
            $controller->GiveParameters($id);
            $controller->display($NumberPage, $page, $navbar);
        }
       
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $navbar = '../Navbar/navbar.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $page = isset($_GET['p']) ? intval($_GET['p']) : 1;
        
        
            $id = 1; // factice, faudra récupérer dans les logs
        
            $limit = 5;
            $offset = ($page - 1) * $limit;
        
            $pdo = Connexion();
            $controller = new DemandPageController($pdo);
        
            $queryParams = $_GET;
            unset($queryParams['p']);
            $queryString = http_build_query($queryParams);
            
            $controller->assignRequest($queryString);
        
            $NumberOffer = $controller->getNumberDemandWithParameters($id);
            $offers = $controller->getWithLimitParameters($page, $limit, $id);
            
        
            $NumberPage = ceil($NumberOffer / $limit);
        
            $controller->GiveParameters($id);
            $controller->display($NumberPage, $page, $navbar);
        }
        
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}







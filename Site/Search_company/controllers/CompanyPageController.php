<?php
session_start();
require_once('models/CompanyPageModel.php');
require_once('libs/Smarty.class.php');

class CompanyPageController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new CompanyPageModel($pdo);
        $this->smarty = new Smarty;
    }

    public function getSector() {
        $sector = $this->model->getSector();
        $this->smarty->assign('sector', $sector);
        return $sector;
    }

    public function getNumberCompanyWithParameters($name, $sector, $city) {
        $numberOffer = $this->model->getNumberCompanyWithParameters($name, $sector, $city);
        $this->smarty->assign('numberOffer', $numberOffer);
        return $numberOffer;
    }

    public function getWithLimitParameters($currentPage, $limit, $name, $sector, $city) {
        $offset = ($currentPage - 1) * $limit;
        $company = $this->model->getWithLimitParameters($limit, $offset, $name, $sector, $city);
        $this->smarty->assign('company', $company);
        return $company;
    }

    public function display($NumberPage, $currentPage, $navbar) {
        $this->smarty->assign('numberPages', $NumberPage);
        $this->smarty->assign('currentPage', $currentPage);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/search_company.tpl');
    }

    public function generateOfferPage() {
        $idOffer = $this->model->getIdOffer();
        return $idOffer;
    }

    public function GiveParameters($name, $sector, $city) {
        $parameters = array(
            'name' => $name,
            'sector' => $sector,
            'city' => $city,
        );

        $this->smarty->assign('parameters', $parameters);
    }

    public function assignRequest($request) {
        $this->smarty->assign('queryString', $request);
    }
}


if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['status'] == 1){
        $navbar = '../Navbar/navbar_admin.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
            $name = isset($_GET["name"]) ? $_GET["name"] : '';
            $sector = isset($_GET["sector"]) ? $_GET["sector"] : 'NoOne';
            $city = isset($_GET["city"]) ? $_GET["city"] : '';
            $page = isset($_GET['p']) ? intval($_GET['p']) : 1;
        
            $limit = 5;
            $offset = ($page - 1) * $limit;
        
            $pdo = Connexion();
            $controller = new CompanyPageController($pdo);
        
            $queryParams = $_GET;
            unset($queryParams['p']);
            $queryString = http_build_query($queryParams);
            
            $controller->assignRequest($queryString);
        
            $NumberOffer = $controller->getNumberCompanyWithParameters($name, $sector, $city);
            $offers = $controller->getWithLimitParameters($page, $limit, $name, $sector, $city);
            
        
            $NumberPage = ceil($NumberOffer / $limit);
        
            $controller->getSector();
            $controller->GiveParameters($name, $sector, $city);
            $controller->display($NumberPage, $page, $navbar);
        }
       
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $navbar = '../Navbar/navbar.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
            $name = isset($_GET["name"]) ? $_GET["name"] : '';
            $sector = isset($_GET["sector"]) ? $_GET["sector"] : 'NoOne';
            $city = isset($_GET["city"]) ? $_GET["city"] : '';
            $page = isset($_GET['p']) ? intval($_GET['p']) : 1;
        
            $limit = 5;
            $offset = ($page - 1) * $limit;
        
            $pdo = Connexion();
            $controller = new CompanyPageController($pdo);
        
            $queryParams = $_GET;
            unset($queryParams['p']);
            $queryString = http_build_query($queryParams);
            
            $controller->assignRequest($queryString);
        
            $NumberOffer = $controller->getNumberCompanyWithParameters($name, $sector, $city);
            $offers = $controller->getWithLimitParameters($page, $limit, $name, $sector, $city);
            
        
            $NumberPage = ceil($NumberOffer / $limit);
        
            $controller->getSector();
            $controller->GiveParameters($name, $sector, $city);
            $controller->display($NumberPage, $page, $navbar);
        }
        
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}























if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $name = isset($_GET["name"]) ? $_GET["name"] : '';
    $sector = isset($_GET["sector"]) ? $_GET["sector"] : 'NoOne';
    $city = isset($_GET["city"]) ? $_GET["city"] : '';
    $page = isset($_GET['p']) ? intval($_GET['p']) : 1;

    $limit = 5;
    $offset = ($page - 1) * $limit;

    $pdo = Connexion();
    $controller = new CompanyPageController($pdo);

    $queryParams = $_GET;
    unset($queryParams['p']);
    $queryString = http_build_query($queryParams);
    
    $controller->assignRequest($queryString);

    $NumberOffer = $controller->getNumberCompanyWithParameters($name, $sector, $city);
    $offers = $controller->getWithLimitParameters($page, $limit, $name, $sector, $city);
    

    $NumberPage = ceil($NumberOffer / $limit);

    $controller->getSector();
    $controller->GiveParameters($name, $sector, $city);
    $controller->display($NumberPage, $page);
}

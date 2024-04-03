<?php
session_start();
require_once('models/CompanyModel.php');
require_once('libs/Smarty.class.php');

class CompanyController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new CompanyModel($pdo);
        $this->smarty = new Smarty;
        $this->getSector(); // Appeler getSector ici
    }

    public function getSector() {
        $sectors = $this->model->getSector();
        $this->smarty->assign('sector', $sectors);
    }
    
    public function showStats($navbar) {
        $stats = $this->model->getAllStat();
        $this->smarty->assign('stats', $stats);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/stat_company.tpl');
    }
    
    public function showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector, $navbar) {
        $stats = $this->model->getAllStatWithParam($orderBy, $orderByCrease, $parameter, $sector);
        $this->smarty->assign('stats', $stats);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/stat_company.tpl');
    }
}

// gestion du formulaire pour retourner les valeurs
if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['isAdmin'] == 1){
        $navbar = '../../../navbar/navbar_admin.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $orderBy = isset($_POST["Orderby"]) ? $_POST["Orderby"] : '';
            $orderByCrease = isset($_POST["OrderByCrease"]) ? $_POST["OrderByCrease"] : '';
            $parameter = isset($_POST["parameter"]) ? $_POST["parameter"] : '';
            $sector = isset($_POST["sector"]) ? $_POST["sector"] : '';
        
            $pdo = Connexion();
            $controller = new CompanyController($pdo);
            $controller->showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector, $navbar);
        } else {
            $pdo = Connexion();
            $controller = new CompanyController($pdo);
            $controller->showStats($navbar);
        }
        
    }
    else if ($_SESSION['isAdmin'] == 0) {
        $navbar = '../../../navbar/navbar.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $orderBy = isset($_POST["Orderby"]) ? $_POST["Orderby"] : '';
            $orderByCrease = isset($_POST["OrderByCrease"]) ? $_POST["OrderByCrease"] : '';
            $parameter = isset($_POST["parameter"]) ? $_POST["parameter"] : '';
            $sector = isset($_POST["sector"]) ? $_POST["sector"] : '';
        
            $pdo = Connexion();
            $controller = new CompanyController($pdo);
            $controller->showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector, $navbar);
        } else {
            $pdo = Connexion();
            $controller = new CompanyController($pdo);
            $controller->showStats($navbar);
        }
       
    }
}
else{
    echo"erreur 404";
}

?>

<?php
require_once('model/DashboardAModel.php');
require_once('libs/Smarty.class.php');

class DashboardAController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new DashboardAModel($pdo);
        $this->smarty = new Smarty;
        $this->getSector(); // Call getSector here
    }

    public function getSector() {
        $sectors = $this->model->getSector();
        $this->smarty->assign('sector', $sectors);
    }
    
    public function showStats() {
        $stats = $this->model->getAllStat();
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('view/admin.tpl');
    }
    
    public function showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector) {
        $stats = $this->model->getAllStatWithParam($orderBy, $orderByCrease, $parameter, $sector);
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('view/admin.tpl');
    }
}

// Handle the form to return the values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderBy = isset($_POST["Orderby"]) ? $_POST["Orderby"] : '';
    $orderByCrease = isset($_POST["OrderByCrease"]) ? $_POST["OrderByCrease"] : '';
    $parameter = isset($_POST["parameter"]) ? $_POST["parameter"] : '';
    $sector = isset($_POST["sector"]) ? $_POST["sector"] : '';

    $pdo = Connexion();
    $controller = new DashboardAController($pdo);
    $controller->showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector);
} else {
    $pdo = Connexion();
    $controller = new DashboardAController($pdo);
    $controller->showStats();
}
?>

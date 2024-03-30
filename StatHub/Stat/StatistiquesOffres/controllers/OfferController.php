<?php
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

    public function showStats() {
        $stats = $this->model->getAllStat();
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('views/templates/stat_offer.tpl');
    }
    
    public function showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector) {
        $stats = $this->model->getAllStatWithParam($orderBy, $orderByCrease, $parameter, $sector);
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('views/templates/stat_offer.tpl');
    }
}

// gestion du formulaire pour retourner les valeurs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderBy = isset($_POST["Orderby"]) ? $_POST["Orderby"] : '';
    $orderByCrease = isset($_POST["OrderByCrease"]) ? $_POST["OrderByCrease"] : '';
    $parameter = isset($_POST["parameter"]) ? $_POST["parameter"] : '';
    $sector = isset($_POST["sector"]) ? $_POST["sector"] : '';

    $pdo = Connexion();
    $controller = new OfferController($pdo);
    $controller->showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector);
} else {
    $pdo = Connexion();
    $controller = new OfferController($pdo);
    $controller->showStats();
}
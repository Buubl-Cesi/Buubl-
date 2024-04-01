<?php
require_once('models/HubModel.php');
require_once('libs/Smarty.class.php');

class HubController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new HubModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function showStats() {
        $stats = $this->model->getAllStat();
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('views/templates/hub.tpl');
    }
    

}
$pdo = Connexion();
$hubController = new HubController($pdo);
$hubController->showStats();


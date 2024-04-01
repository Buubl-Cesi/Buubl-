<?php
session_start();
require_once('models/HomeModel.php');
require_once('libs/Smarty.class.php');

class HomeController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new HomeModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function LoadPage() {
        $id = 1;

        $LastAdded = $this->model->getLastFourCompanies();
        $LastApplied = $this->model->getLastFourAppliedCompanies($id);
        $PilotInfo = $this->model->getPilotInfo($id);

        $this->smarty->assign('LastAdded', $LastAdded);
        $this->smarty->assign('LastLiked', $LastApplied);
        $this->smarty->assign('PilotInfo', $PilotInfo);

        $this->smarty->display('views/templates/home.tpl');
    }
}

$pdo = Connexion();
$homeController = new HomeController($pdo);
$homeController->LoadPage();
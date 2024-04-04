<?php
session_start();
require_once('models/HomeModel.php');
require_once('libs/Smarty.class.php');

class HomeController {
    private $model;
    private $smarty;
    public $id;

    public function __construct($pdo) {
        $this->model = new HomeModel($pdo);
        $this->smarty = new Smarty;
        $this->id = 2; 
    }
    
    public function LoadPage() {
        $LastAdded = $this->model->getLastFourCompanies();
        $LastApplied = $this->model->getLastFourAppliedCompanies($this->id);
        $PilotInfo = $this->model->getPilotInfo($this->id);

        $button = '';
        if ($this->id == 2) {
            $button = '<form method="post" action="/HomePage/controllers/HomeController.php">
                <button type="submit" value="redirectStat" class="button-redirect">Redirection</button>
            </form>';
        } else {
            $button = '';
        }
    
        $this->smarty->assign('LastAdded', $LastAdded);
        $this->smarty->assign('LastLiked', $LastApplied);
        $this->smarty->assign('PilotInfo', $PilotInfo);
        $this->smarty->assign('button', $button); 

        $this->smarty->display('views/templates/home.tpl');
    }
}

$id=2;
$pdo = Connexion();
$homeController = new HomeController($pdo);
$homeController->LoadPage();
print_r($_SESSION);

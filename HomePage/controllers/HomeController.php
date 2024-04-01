<?php
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
        // IL FAUT RECUPER L'ID DE L'UTILISATEUR CONNECTE DANS LA VARIABLE $id

        // Pour l'instant je met un id en dur pour tester
        $id = 1;
        // On récupère les 4 dernières entreprises ajoutées et likées par l'utilisateur connecté pour pouvoir les afficher sur la page d'accueil
        $LastAdded = $this->model->getLastFourCompanies();
        $LastApplied = $this->model->getLastFourAppliedCompanies();
        $PilotInfo = $this->model->getPilotInfo($id);

        $this->smarty->assign('LastAdded', $LastAdded);
        $this->smarty->assign('LastLiked', $LastApplied);
        $this->smarty->assign('PilotInfo', $PilotInfo);
        
        $this->smarty->display('views/templates/hub.tpl');
    }
}
$pdo = Connexion();
$homeController = new HomeController($pdo);
$homeController->LoadPage();


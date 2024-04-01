<?php
require_once('models/OfferPageModel.php');
require_once('libs/Smarty.class.php');

class OfferPageController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new OfferPageModel($pdo);
        $this->smarty = new Smarty;
    }


    public function assign($var, $value) {
        $this->smarty->assign($var, $value);
    }

    public function getNumberOffer() {
        $numberOffer = $this->model->getNumberOffer(); // Ici ça récupère 
        $this->smarty->assign('numberOffer', $numberOffer);
        return $numberOffer;
    }


    public function getOfferWithLimit($currentPage, $limit) {
        $offset = ($currentPage - 1) * $limit;
        $offers = $this->model->getOfferWithLimit($limit, $offset);
        $this->smarty->assign('offers', $offers);
        return $offers;
    }

    public function display($NumberPage, $currentPage, $data) {
        $this->smarty->assign('numberPages', $NumberPage);
        $this->smarty->assign('currentPage', $currentPage);
        $this->smarty->assign('data', $data);
        $this->smarty->display('views/templates/search_offer.tpl');
    }
}

// connexion et instanciation du controller pour récupérer les méthodes
$pdo = Connexion();
$controller = new OfferPageController($pdo);

// Valeurs utiles de la pagination
$NumberOffer = $controller->getNumberOffer();
$Limit = 6;

// Calcul du nombre total de pages avec ceil()
$NumberPage = ceil($NumberOffer / $Limit);

// Obtenez le numéro de page actuel à partir de la requête GET
$currentPage = isset($_GET['p']) ? intval($_GET['p']) : 1;

$data = $controller->getOfferWithLimit($currentPage, $Limit);
$controller->display($NumberPage, $currentPage, $data);

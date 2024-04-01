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

    public function getSector() {
        $sector = $this->model->getSector();
        $this->smarty->assign('sector', $sector);
        return $sector;
    }

    public function getSkills() {
        $skills = $this->model->getSkills();
        $this->smarty->assign('skills', $skills);
        return $skills;
    }



    public function getNumberOffer() {
        $numberOffer = $this->model->getNumberOffer();
        $this->smarty->assign('numberOffer', $numberOffer);
        return $numberOffer;
    }


    public function getOfferWithLimit($currentPage, $limit) {
        $offset = ($currentPage - 1) * $limit;
        $offers = $this->model->getOfferWithLimit($limit, $offset);
        $this->smarty->assign('offers', $offers);
        return $offers;
    }

    public function getWithLimitParameters($currentPage, $limit) {
        $name = $_POST['name'];
        $sector = $_POST['sector'];
        $skills = $_POST['skills'];
        $city = $_POST['city'];
        $duration = $_POST['duration'];

        $offset = ($currentPage - 1) * $limit;
        $offers = $this->model->getWithLimitParameters($limit, $offset, $name, $sector, $skills, $city, $duration);
        $this->smarty->assign('offers', $offers);
        return $offers;
    }

    public function display($NumberPage, $currentPage) {
        $this->smarty->assign('numberPages', $NumberPage);
        $this->smarty->assign('currentPage', $currentPage);
        $this->smarty->display('views/templates/search_offer.tpl');
    }

    public function generateOfferPage() {
        $idOffer = $this->model->getIdOffer();
        
        return $idOffer;
    }
}

// connexion et instanciation du controller pour récupérer les méthodes
$pdo = Connexion();
$controller = new OfferPageController($pdo);

// Valeurs utiles de la pagination
$NumberOffer = $controller->getNumberOffer();
$Limit = 3;

// Calcul du nombre total de pages avec ceil()
$NumberPage = ceil($NumberOffer / $Limit);

// Obtenez le numéro de page actuel à partir de la requête GET
$currentPage = isset($_GET['p']) ? intval($_GET['p']) : 1;

$controller->getSector();
$controller->getSkills();

$controller->getOfferWithLimit($currentPage, $Limit);

$controller->display($NumberPage, $currentPage);

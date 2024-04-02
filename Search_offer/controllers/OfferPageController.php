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

    public function getNumberOfferWithParameters($name, $sector, $skills, $city, $duration) {
        $numberOffer = $this->model->getNumberOfferWithParameters($name, $sector, $skills, $city, $duration);
        $this->smarty->assign('numberOffer', $numberOffer);
        return $numberOffer;
    }

    public function getOfferWithLimit($currentPage, $limit) {
        $offset = ($currentPage - 1) * $limit;
        $offers = $this->model->getOfferWithLimit($limit, $offset);
        $this->smarty->assign('offers', $offers);
        return $offers;
    }

    public function getWithLimitParameters($currentPage, $limit, $name, $sector, $skill, $city, $duration) {
        $offset = ($currentPage - 1) * $limit;
        $offers = $this->model->getWithLimitParameters($limit, $offset, $name, $sector, $skill, $city, $duration);
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

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Récupérer les paramètres de recherche et de pagination depuis l'URL
    $name = isset($_GET["name"]) ? $_GET["name"] : '';
    $sector = isset($_GET["sector"]) ? $_GET["sector"] : 'NoOne';
    $skill = isset($_GET["skill"]) ? $_GET["skill"] : 'NoOne';
    $city = isset($_GET["city"]) ? $_GET["city"] : '';
    $duration = isset($_GET["duration"]) ? $_GET["duration"] : '';
    $page = isset($_GET['p']) ? intval($_GET['p']) : 1;

    // Code pour la pagination
    $limit = 3;
    $offset = ($page - 1) * $limit;

    $pdo = Connexion();
    $controller = new OfferPageController($pdo);

    // Effectuer la recherche avec les paramètres ou récupérer toutes les offres si aucun paramètre de recherche n'est spécifié
    if (empty($name) && $sector == "NoOne" && $skill == "NoOne" && empty($city) && empty($duration)) {
        $NumberOffer = $controller->getNumberOffer();
        $offers = $controller->getOfferWithLimit($page, $limit);
    } else {
        $NumberOffer = $controller->getNumberOfferWithParameters($name, $sector, $skill, $city, $duration);
        $offers = $controller->getWithLimitParameters($page, $limit, $name, $sector, $skill, $city, $duration);
    }

    // Calculer le nombre de pages nécessaires pour la pagination
    $NumberPage = ceil($NumberOffer / $limit);

    // Afficher les résultats
    $controller->getSector();
    $controller->getSkills();
    $controller->display($NumberPage, $page);
}

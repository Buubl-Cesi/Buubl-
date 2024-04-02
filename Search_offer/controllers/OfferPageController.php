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

    public function GiveParameters($name, $sector, $skill, $city, $duration) {
        $parameters = array(
            'name' => $name,
            'sector' => $sector,
            'skill' => $skill,
            'city' => $city,
            'duration' => $duration
        );

        $this->smarty->assign('parameters', $parameters);
    }

    public function assignRequest($request) {
        $this->smarty->assign('queryString', $request);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $name = isset($_GET["name"]) ? $_GET["name"] : '';
    $sector = isset($_GET["sector"]) ? $_GET["sector"] : 'NoOne';
    $skill = isset($_GET["skill"]) ? $_GET["skill"] : 'NoOne';
    $city = isset($_GET["city"]) ? $_GET["city"] : '';
    $duration = isset($_GET["duration"]) ? $_GET["duration"] : '';
    $page = isset($_GET['p']) ? intval($_GET['p']) : 1;

    $limit = 6;
    $offset = ($page - 1) * $limit;

    $pdo = Connexion();
    $controller = new OfferPageController($pdo);

    $queryParams = $_GET;
    unset($queryParams['p']);
    $queryString = http_build_query($queryParams);
    
    $controller->assignRequest($queryString);
    
    if (empty($name) && $sector == "NoOne" && $skill == "NoOne" && empty($city) && empty($duration)) {
        $NumberOffer = $controller->getNumberOffer();
        $offers = $controller->getOfferWithLimit($page, $limit);
    } else {
        $NumberOffer = $controller->getNumberOfferWithParameters($name, $sector, $skill, $city, $duration);
        $offers = $controller->getWithLimitParameters($page, $limit, $name, $sector, $skill, $city, $duration);
    }

    $NumberPage = ceil($NumberOffer / $limit);

    $controller->getSector();
    $controller->getSkills();
    $controller->GiveParameters($name, $sector, $skill, $city, $duration);
    $controller->display($NumberPage, $page);
}

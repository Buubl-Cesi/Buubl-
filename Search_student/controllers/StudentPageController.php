<?php
require_once('models/StudentPageModel.php');
require_once('libs/Smarty.class.php');

class StudentPageController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new StudentPageModel($pdo);
        $this->smarty = new Smarty;
    }


    public function getNumberStudent() {
        $numberStudent = $this->model->getNumberStudent();
        $this->smarty->assign('numberStudent', $numberStudent);
        return $numberStudent;
    }

    public function getNumberStudentWithParameters($name, $fname, $promo) {
        $numberStudent = $this->model->getNumberStudentWithParameters($name, $fname, $promo);
        $this->smarty->assign('numberStudent', $numberStudent);
        return $numberStudent;
    }

    public function getStudentWithLimit($currentPage, $limit) {
        $offset = ($currentPage - 1) * $limit;
        $student = $this->model->getStudentWithLimit($limit, $offset);
        $this->smarty->assign('student', $student);
        return $student;
    }

    public function getWithLimitParameters($currentPage, $limit, $name, $fname, $promo) {
        $offset = ($currentPage - 1) * $limit;
        $student = $this->model->getWithLimitParameters($limit, $offset, $name, $fname, $promo);
        $this->smarty->assign('student', $student);
        return $student;
    }

    public function display($NumberPage, $currentPage) {
        $this->smarty->assign('numberPages', $NumberPage);
        $this->smarty->assign('currentPage', $currentPage);
        $this->smarty->display('views/templates/search_student.tpl');
    }

    public function generateOfferPage() {
        $idOffer = $this->model->getIdOffer();
        return $idOffer;
    }

    public function GiveParameters($name, $sector, $city) {
        $parameters = array(
            'name' => $name,
            'sector' => $sector,
            'city' => $city,
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
    $city = isset($_GET["city"]) ? $_GET["city"] : '';
    $page = isset($_GET['p']) ? intval($_GET['p']) : 1;

    $limit = 2;
    $offset = ($page - 1) * $limit;

    $pdo = Connexion();
    $controller = new StudentPageController($pdo);

    $queryParams = $_GET;
    unset($queryParams['p']);
    $queryString = http_build_query($queryParams);
    
    $controller->assignRequest($queryString);
    
    if (empty($name) && $sector == "NoOne" && empty($city)) {
        $NumberOffer = $controller->getNumberCompany();
        $offers = $controller->getCompanyWithLimit($page, $limit);
    } else {
        $NumberOffer = $controller->getNumberCompanyWithParameters($name, $sector, $city);
        $offers = $controller->getWithLimitParameters($page, $limit, $name, $sector, $city);
    }

    $NumberPage = ceil($NumberOffer / $limit);

    $controller->getSector();
    $controller->GiveParameters($name, $sector, $city);
    $controller->display($NumberPage, $page);
}

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


    public function getNumberStudentWithParameters($name, $fname, $promo) {
        $numberStudent = $this->model->getNumberStudentWithParameters($name, $fname, $promo);
        $this->smarty->assign('numberStudent', $numberStudent);
        return $numberStudent;
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

    /*
    public function generateStudentPage() {
        $idOffer = $this->model->getIdStudent();
        return $idOffer;
    }
    */

    public function GiveParameters($name, $fname, $promo) {
        $parameters = array(
            'name' => $name,
            'fname' => $fname,
            'promo' => $promo,
        );
        $this->smarty->assign('parameters', $parameters);
    }

    public function assignRequest($request) {
        $this->smarty->assign('queryString', $request);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $name = isset($_GET["name"]) ? $_GET["name"] : '';
    $fname = isset($_GET["fname"]) ? $_GET["fname"] : '';
    $promo = isset($_GET["promo"]) ? $_GET["promo"] : '';
    $page = isset($_GET['p']) ? intval($_GET['p']) : 1;

    $limit = 2;
    $offset = ($page - 1) * $limit;

    $pdo = Connexion();
    $controller = new StudentPageController($pdo);

    $queryParams = $_GET;
    unset($queryParams['p']);
    $queryString = http_build_query($queryParams);
    
    $controller->assignRequest($queryString);

    $NumberOffer = $controller->getNumberStudentWithParameters($name, $fname, $promo);
    $offers = $controller->getWithLimitParameters($page, $limit, $name, $fname, $promo);
    

    $NumberPage = ceil($NumberOffer / $limit);

    $controller->GiveParameters($name, $fname, $promo);
    $controller->display($NumberPage, $page);
}

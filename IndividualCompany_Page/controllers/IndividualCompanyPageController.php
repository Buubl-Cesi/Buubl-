<?php
require_once('models/IndividualCompanyPageModel.php');
require_once('libs/Smarty.class.php');

class IndividualCompanyPageController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new IndividualCompanyPageModel($pdo);
        $this->smarty = new Smarty;
    }


    public function getCompanyInfo($id) {
        
        $IndividualCompany = $this->model->getCompanyInfo($id);
        $IndividualLike = $this->model->getCompanyLike($id);
        $IndividualCand = $this->model->getCompanycand($id);
        $this->smarty->assign('IndividualCompany', $IndividualCompany);
        $this->smarty->assign('IndividualLike', $IndividualLike);
        $this->smarty->assign('IndividualCand', $IndividualCand);
        
    }


    public function display() {
        $this->smarty->display('views/templates/company.tpl');
    }

    /*
    public function GiveParameters($id) {
        $parameters = array(
            'id' => $id,
        );
        $this->smarty->assign('id', $id);
    }

    public function assignRequest($request) {
        $this->smarty->assign('queryString', $request);
    }
    */
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = isset($_GET['id']) ? intval($_GET['id']) : null;
    
    $pdo = Connexion();
    $controller = new IndividualCompanyPageController($pdo);

    /*
    $queryParams = $_GET;+
    unset($queryParams['p']);
    $queryString = http_build_query($queryParams);
    $controller->assignRequest($queryString);
    */

    $company = $controller->getCompanyInfo($id);
    $controller->display();
}

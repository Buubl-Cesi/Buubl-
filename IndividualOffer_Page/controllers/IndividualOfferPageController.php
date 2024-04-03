<?php
require_once('models/IndividualOfferPageModel.php');
require_once('libs/Smarty.class.php');

class IndividualOfferPageController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new IndividualOfferPageModel($pdo);
        $this->smarty = new Smarty;
    }


    public function getOfferInfo($id) {
        
        $IndividualOffer = $this->model->getOfferInfo($id);
        $this->smarty->assign('IndividualOffer', $IndividualOffer);
        return $IndividualOffer;
    }

    public function display() {
        $this->smarty->display('views/templates/Offer.tpl');
    }

    
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 1;

    $id = 1;

    $pdo = Connexion();
    $controller = new IndividualOfferPageController($pdo);

    /*
    $queryParams = $_GET;
    unset($queryParams['p']);
    $queryString = http_build_query($queryParams);
    $controller->assignRequest($queryString);
    */

    $Offer = $controller->getOfferInfo($id);
    $controller->display();
}

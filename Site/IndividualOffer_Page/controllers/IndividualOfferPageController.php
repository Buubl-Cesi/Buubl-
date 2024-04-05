<?php
session_start();
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

    public function display($navbar) {
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/Offer.tpl');
    }

//LIKE-------------------------------------------------------------------
    public function VerifLike($id, $id_intern) {
        $results = $this->model->verif($id, $id_intern); 
        if ($results) { 
            foreach ($results as $result) {
                if ($result['val'] == 0) { 
                    return true; 
                }
            }
        }
        return false; 
    }

    public function AjoutLike($id, $id_intern) {
        $this->model->AjoutLike($id_intern);
        $this->model->AjoutAvoir($id);
    }

    public function DeleteLike($id, $id_intern) {
        $res = $this->model->RecupAvoir($id, $id_intern);
        foreach ($res as $result) {
            $idAvoir = $result['id']; 
            $this->model->DeleteAvoir($idAvoir);
            $this->model->DeleteLike($idAvoir);
        }
    }
//APPLICATION-------------------------------------------------------------------
    public function VerifApplication($id, $id_intern) {
        $results = $this->model->VerifApplication($id, $id_intern); 
        if ($results) { 
            foreach ($results as $result) {
                if ($result['NombreApplications'] == 0) { 
                    return true; 
                }
            }
        }
        return false; 
    }

    public function AjoutApplication($id, $id_intern) {
        $this->model->AjoutApplication($id, $id_intern);
    }

    public function DeleteApplication($id, $id_intern) {
        $this->model->DeleteApplication($id, $id_intern);
    }

    
}


if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['status'] == 1){
        $navbar = '../Navbar/navbar_admin.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = isset($_GET['id']) ? intval($_GET['id']) : null;
        
            $pdo = Connexion();
            $controller = new IndividualOfferPageController($pdo);
        
            $Offer = $controller->getOfferInfo($id);
            $controller->display($navbar);
        
            
        }
        
        elseif ($_POST['action'] == 'like') {
            $id = 1;
            $id_intern = isset($_GET['id']) ? intval($_GET['id']) : null;
        
            $pdo = Connexion();
            $controller = new IndividualOfferPageController($pdo);
        
            $verif = $controller->VerifLike($id, $id_intern);
            if($verif == true){
                //sup like
                $controller->AjoutLike($id, $id_intern);
                $Offer = $controller->getOfferInfo($id);
                $controller->display($navbar);
            }
            else{
                //ajouter like 
                $controller->DeleteLike($id, $id_intern);
                $Offer = $controller->getOfferInfo($id);
                $controller->display($navbar);
            }
        
        
        
        } 
        
        elseif ($_POST['action'] == 'apply') {
            $id = 1;
            $id_intern = isset($_GET['id']) ? intval($_GET['id']) : null;
        
            $pdo = Connexion();
            $controller = new IndividualOfferPageController($pdo);
            $verif = $controller->VerifApplication($id, $id_intern);
            if($verif == true){
                //ajouter like 
                $controller->AjoutApplication($id, $id_intern);
                $Offer = $controller->getOfferInfo($id);
                $controller->display($navbar);
            }
            else{ 
                //sup like
                $controller->DeleteApplication($id, $id_intern);
                $Offer = $controller->getOfferInfo($id);
                $controller->display($navbar);
            }
        }
       
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $navbar = '../Navbar/navbar.tpl';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = isset($_GET['id']) ? intval($_GET['id']) : null;
        
            $pdo = Connexion();
            $controller = new IndividualOfferPageController($pdo);
        
            $Offer = $controller->getOfferInfo($id);
            $controller->display($navbar);
        
            
        }
        
        elseif ($_POST['action'] == 'like') {
            $id = 1;
            $id_intern = isset($_GET['id']) ? intval($_GET['id']) : null;
        
            $pdo = Connexion();
            $controller = new IndividualOfferPageController($pdo);
        
            $verif = $controller->VerifLike($id, $id_intern);
            if($verif == true){
                //sup like
                $controller->AjoutLike($id, $id_intern);
                $Offer = $controller->getOfferInfo($id);
                $controller->display($navbar);
            }
            else{
                //ajouter like 
                $controller->DeleteLike($id, $id_intern);
                $Offer = $controller->getOfferInfo($id);
                $controller->display($navbar);
            }
        
        
        
        } 
        
        elseif ($_POST['action'] == 'apply') {
            $id = 1;
            $id_intern = isset($_GET['id']) ? intval($_GET['id']) : null;
        
            $pdo = Connexion();
            $controller = new IndividualOfferPageController($pdo);
            $verif = $controller->VerifApplication($id, $id_intern);
            if($verif == true){
                //ajouter like 
                $controller->AjoutApplication($id, $id_intern);
                $Offer = $controller->getOfferInfo($id);
                $controller->display($navbar);
            }
            else{ 
                //sup like
                $controller->DeleteApplication($id, $id_intern);
                $Offer = $controller->getOfferInfo($id);
                $controller->display($navbar);
            }
        }
        
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}







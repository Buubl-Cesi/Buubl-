<?php
session_start();
require_once('models/ProfilModel.php');
require_once('libs/Smarty.class.php');

class ProfilController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new ProfilModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function LoadPage($id) {
        $info = $this->model->getprofil($id);
        $this->smarty->assign('info', $info);
        $this->smarty->display('views/templates/profil.tpl');
    }

}

    $id = 1;
    $pdo = Connexion();
    $ProfilController = new ProfilController($pdo);
    $ProfilController->LoadPage($id);
   
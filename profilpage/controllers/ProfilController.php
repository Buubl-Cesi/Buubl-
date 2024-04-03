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

    public function update($id, $prenom, $nom, $email, $adresse, $ville, $login) {
        $infon = $this->model->update($id, $prenom, $nom, $email, $adresse, $ville, $login);
        $this->smarty->assign('infon', $infon);
        $this->smarty->display('views/templates/profil.tpl');
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
    $ville = isset($_POST['codePostal']) ? $_POST['codePostal'] : '';
    $login = isset($_POST['login']) ? $_POST['login'] : '';

    $id = 1;
    $pdo = Connexion();
    $ProfilController = new ProfilController($pdo);
    $ProfilController->update($id, $prenom, $nom, $email, $adresse, $ville, $login);
    echo "update";
}
else{
    $id = 1;
    $pdo = Connexion();
    $ProfilController = new ProfilController($pdo);
    $ProfilController->LoadPage($id);
}
    
     
    
  

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
    $prenom = $_POST['prenom'] ?? '';
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $adresse = $_POST['adresse'] ?? '';
    $ville = $_POST['ville'] ?? ''; 
    $login = $_POST['login'] ?? '';

    $id = 2;
    $pdo = Connexion();
    $ProfilController = new ProfilController($pdo);
    $ProfilController->update($id, $prenom, $nom, $email, $adresse, $ville, $login);
    echo "update";
    header('Content-Type: application/json');
    echo json_encode(['success' => $result ? true : false]);
}
else{
    $id = 2;
    $pdo = Connexion();
    $ProfilController = new ProfilController($pdo);
    $ProfilController->LoadPage($id);
    echo "pas pas pas ";
}
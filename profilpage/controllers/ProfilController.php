<?php
session_start();
require_once('models/ProfilModel.php');
require_once('libs/Smarty.class.php');

class ProfilController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new HomeModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function LoadPage($navbar) {
        $id = $_SESSION['id'];

        $LastAdded = $this->model->getLastFourCompanies();
        $LastApplied = $this->model->getLastFourAppliedCompanies($id);
        $PilotInfo = $this->model->getPilotInfo($id);

        $this->smarty->assign('LastAdded', $LastAdded);
        $this->smarty->assign('LastLiked', $LastApplied);
        $this->smarty->assign('PilotInfo', $PilotInfo);

        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/home.tpl');
    }
}
if ($_SESSION['isLoggedIn'] == 1){
    if ($_SESSION['isAdmin'] == 1){
        $navbar = '../navbar/navbar_admin.tpl';
        $pdo = Connexion();
        $ProfilController = new ProfilController($pdo);
        $ProfilController->LoadPage($navbar);
        print_r($_SESSION);
    }
    else if ($_SESSION['isAdmin'] == 0) {
        $navbar = '../navbar/navbar.tpl';
        $pdo = Connexion();
        $ProfilController = new ProfilController($pdo);
        $ProfilController->LoadPage($navbar);
        print_r($_SESSION);
    }
}
else{
    echo' <!DOCTYPE html>
    <html lang="fr">
    <head>
    <meta charset="UTF-8">
    <title>Erreur 403 - Accès Refusé</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .full-page-image {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            position: fixed; 
            top: 0;
            left: 0;
    }
</style>
</head>
<body>

<img src="../../../../Images/403.png" alt="Erreur 403 - Accès Refusé" class="full-page-image">

</body>
</html>';
}

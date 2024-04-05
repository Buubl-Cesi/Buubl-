<?php
session_start();
require_once('models/StudentModel.php');
require_once('libs/Smarty.class.php');

class StudentController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new StudentModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function showStats($navbar,$promo) {
        $stats = $this->model->getAllStat($promo);
        $this->smarty->assign('stats', $stats);
        $this->smarty->display($navbar);
        $this->smarty->display('views/templates/stat_student.tpl');
    }

    public function getPromoPilot($id_pilot) {
        $promo = $this->model->getPromoPilot($id_pilot);
        return $promo['PILOT_PROMOTION'];
    }
}

if ($_SESSION['isLoggedIn'] == 1){
    
    if ($_SESSION['status'] == 1){
        $id_pilot =  $_SESSION['id'];
        $navbar = '../Navbar/navbar_admin.tpl';
        $pdo = Connexion();
        $controller = new StudentController($pdo);
    
        $promo = $controller->getPromoPilot($id_pilot);
        $controller->showStats($navbar,$promo);
       
    }
    else if ($_SESSION['status'] == 2 || $_SESSION['status'] == 3) {
        $id_pilot =  $_SESSION['id'];
        $navbar = '../Navbar/navbar.tpl';
        $pdo = Connexion();
        $controller = new StudentController($pdo);
    
        $promo = $controller->getPromoPilot($id_pilot);
        $controller->showStats($navbar,$promo);
        
    }
}
else{
    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<img src="../../Images/404.png" alt="image" style="width: 1000px; height: auto;">';
    echo '</div>';
}
?>

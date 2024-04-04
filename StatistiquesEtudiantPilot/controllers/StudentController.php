<?php
require_once('models/StudentModel.php');
require_once('libs/Smarty.class.php');

class StudentController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new StudentModel($pdo);
        $this->smarty = new Smarty;
    }
    
    public function showStats($promo) {
        $stats = $this->model->getAllStat($promo);
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('views/templates/stat_student.tpl');
    }

    public function getPromoPilot($id_pilot) {
        $promo = $this->model->getPromoPilot($id_pilot);
        return $promo['PILOT_PROMOTION'];
    }
}

// gestion du formulaire pour retourner les valeurs
    $id_pilot = 2; // Factice ----------------------------------------------------



    $pdo = Connexion();
    $controller = new StudentController($pdo);

    $promo = $controller->getPromoPilot($id_pilot);
    $controller->showStats($promo);

?>

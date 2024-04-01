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
    
    public function showStats() {
        $stats = $this->model->getAllStat();
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('views/templates/stat_student.tpl');
    }
    
    public function showStatsWithParam($orderBy, $orderByCrease, $parameter) {
        $stats = $this->model->getAllStatWithParam($orderBy, $orderByCrease, $parameter);
        $this->smarty->assign('stats', $stats);
        $this->smarty->display('views/templates/stat_student.tpl');
    }
}

// gestion du formulaire pour retourner les valeurs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderBy = isset($_POST["Orderby"]) ? $_POST["Orderby"] : '';
    $orderByCrease = isset($_POST["OrderByCrease"]) ? $_POST["OrderByCrease"] : '';
    $parameter = isset($_POST["parameter"]) ? $_POST["parameter"] : '';
    $sector = isset($_POST["sector"]) ? $_POST["sector"] : '';

    $pdo = Connexion();
    $controller = new StudentController($pdo);
    $controller->showStatsWithParam($orderBy, $orderByCrease, $parameter);
} else {
    $pdo = Connexion();
    $controller = new StudentController($pdo);
    $controller->showStats();
}
?>

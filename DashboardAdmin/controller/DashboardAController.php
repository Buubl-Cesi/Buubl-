<?php
require_once('model/DashboardAModel.php');
require_once('libs/Smarty.class.php');

class DashboardAController {
    protected $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new DashboardAModel($pdo);
        $this->smarty = new Smarty;
        $this->smarty->display('view/admin.tpl');
    }

}

class StudentController extends DashboardAController {
    public function __construct($pdo) {
        parent::__construct($pdo);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $action = isset($_POST["action"]) ? $_POST["action"] : '';
            if ($action == 'createStudent') {
                $this->createStudents();
            } elseif ($action == 'updateStudent') {
                $this->updateStudents();
            } elseif ($action == 'deleteStudent') {
                $this->deleteStudents();
            }
        }
    }


    public function createStudents(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name_student = isset($_POST["name_student"]) ? $_POST["name_student"] : '';
            $fname_student = isset($_POST["fname_student"]) ? $_POST["fname_student"] : '';
            $mail_student = isset($_POST["mail_student"]) ? $_POST["mail_student"] : '';
            $login_student = isset($_POST["login_student"]) ? $_POST["login_student"] : '';
            $password_student = isset($_POST["password_student"]) ? $_POST["password_student"] : '';
            $promotion_student = isset($_POST["promotion_student"]) ? $_POST["promotion_student"] : '';
            $country_student = isset($_POST["country_student"]) ? $_POST["country_student"] : '';
            $pc_student = isset($_POST["pc_student"]) ? $_POST["pc_student"] : '';
            $city_student = isset($_POST["city_student"]) ? $_POST["city_student"] : '';
            $street_student = isset($_POST["street_student"]) ? $_POST["street_student"] : '';
            $numap_student = isset($_POST["numap_student"]) ? $_POST["numap_student"] : '';
            $pfp_student = isset($_POST["pfp_student"]) ? $_POST["pfp_student"] : '';
            $this->model->createStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student);
        }
    }

    public function updateStudents(){
        
    }

    public function deleteStudents(){
        
    }
}

class CompanyController extends DashboardAController {
    public function createCompany(){

    }

    public function updateCompany(){
        
    }

    public function deleteCompany(){
        
    }
}

class PilotController extends DashboardAController {
    public function createPilot(){

    }

    public function updatePilot(){
        
    }

    public function deletePilot(){
        
    }
}

class OfferController extends DashboardAController {
    public function createOffer(){

    }

    public function updateOffer(){
        
    }

    public function deleteOffer(){
        
    }
}




// Handle the form to return the values
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $orderBy = isset($_POST["Orderby"]) ? $_POST["Orderby"] : '';
//     $orderByCrease = isset($_POST["OrderByCrease"]) ? $_POST["OrderByCrease"] : '';
//     $parameter = isset($_POST["parameter"]) ? $_POST["parameter"] : '';
//     $sector = isset($_POST["sector"]) ? $_POST["sector"] : '';

//     $pdo = Connexion();
//     $controller = new DashboardAController($pdo);
//     $controller->showStatsWithParam($orderBy, $orderByCrease, $parameter, $sector);
// } else {
//     $pdo = Connexion();
//     $controller = new DashboardAController($pdo);
//     $controller->showStats();
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $formId = isset($_POST["formId"]) ? $_POST["formId"] : '';

//     switch ($formId) {
//         case 'form1':
//             $name_student = isset($_POST["name_student"]) ? $_POST["name_student"] : '';
//             $fname_student = isset($_POST["fname_student"]) ? $_POST["fname_student"] : '';
//             $mail_student = isset($_POST["mail_student"]) ? $_POST["mail_student"] : '';
//             $login_student = isset($_POST["login_student"]) ? $_POST["login_student"] : '';
//             $password_student = isset($_POST["password_student"]) ? $_POST["password_student"] : '';
//             $promotion_student = isset($_POST["promotion_student"]) ? $_POST["promotion_student"] : '';
//             $country_student = isset($_POST["country_student"]) ? $_POST["country_student"] : '';
//             $pc_student = isset($_POST["pc_student"]) ? $_POST["pc_student"] : '';
//             $city_student = isset($_POST["city_student"]) ? $_POST["city_student"] : '';
//             $street_student = isset($_POST["street_student"]) ? $_POST["street_student"] : '';
//             $numap_student = isset($_POST["numap_student"]) ? $_POST["numap_student"] : '';
//             $pfp_student = isset($_POST["pfp_student"]) ? $_POST["pfp_student"] : '';
//             $this->model->createStudent($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student);
//             break;
//         case 'form2':
//             $name_company = isset($_POST["name_company"]) ? $_POST["name_company"] : '';
//             $activity_company = isset($_POST["activity_company"]) ? $_POST["activity_company"] : '';
//             $desc_company = isset($_POST["desc_company"]) ? $_POST["desc_company"] : '';
//             $country_company = isset($_POST["country_company"]) ? $_POST["country_company"] : '';
//             $pc_company = isset($_POST["pc_company"]) ? $_POST["pc_company"] : '';
//             $city_company = isset($_POST["city_company"]) ? $_POST["city_company"] : '';
//             $street_company = isset($_POST["street_company"]) ? $_POST["street_company"] : '';
//             $numap_company = isset($_POST["numap_company"]) ? $_POST["numap_company"] : '';
//             $pfp_company = isset($_POST["pfp_company"]) ? $_POST["pfp_company"] : '';
//             break;

//         case 'form3':
//             $name_pilot = isset($_POST["name_pilot"]) ? $_POST["name_pilot"] : '';
//             $fname_pilot = isset($_POST["fname_pilot"]) ? $_POST["fname_pilot"] : '';
//             $mail_pilot = isset($_POST["mail_pilot"]) ? $_POST["mail_pilot"] : '';
//             $login_pilot = isset($_POST["login_pilot"]) ? $_POST["login_pilot"] : '';
//             $password_pilot = isset($_POST["password_pilot"]) ? $_POST["password_pilot"] : '';
//             $promotion_pilot = isset($_POST["promotion_pilot"]) ? $_POST["promotion_pilot"] : '';
//             $country_pilot = isset($_POST["country_pilot"]) ? $_POST["country_pilot"] : '';
//             $pc_pilot = isset($_POST["pc_pilot"]) ? $_POST["pc_pilot"] : '';
//             $city_pilot = isset($_POST["city_pilot"]) ? $_POST["city_pilot"] : '';
//             $street_pilot = isset($_POST["street_pilot"]) ? $_POST["street_pilot"] : '';
//             $numap_pilot = isset($_POST["numap_pilot"]) ? $_POST["numap_pilot"] : '';
//             $activity_pilot = isset($_POST["activity_pilot"]) ? $_POST["activity_pilot"] : '';
//             break;

//         case 'form4':
//             $name_offer = isset($_POST["name_offer"]) ? $_POST["name_offer"] : '';
//             $desc_offer = isset($_POST["desc_offer"]) ? $_POST["desc_offer"] : '';
//             $duration_offer = isset($_POST["duration_offer"]) ? $_POST["duration_offer"] : '';
//             $start_offer = isset($_POST["start_offer"]) ? $_POST["start_offer"] : '';
//             $end_offer = isset($_POST["end_offer"]) ? $_POST["end_offer"] : '';
//             $hour_offer = isset($_POST["hour_offer"]) ? $_POST["hour_offer"] : '';
//             $pricing_offer = isset($_POST["pricing_offer"]) ? $_POST["pricing_offer"] : '';
//             $skills_offer = isset($_POST["skills_offer"]) ? $_POST["skills_offer"] : '';
//             $nb_offer = isset($_POST["nb_offer"]) ? $_POST["nb_offer"] : '';
//             break;
//     }
// }

?>

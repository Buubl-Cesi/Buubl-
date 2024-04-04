<?php
require_once('model/DashboardAModel.php');
require_once('libs/Smarty.class.php');

class DashboardAController {
    private $model;
    private $smarty;

    public function __construct($pdo) {
        $this->model = new DashboardAModel($pdo);
        $this->smarty = new Smarty;
    }

    public function display(){
        $this->smarty->display('view/admin.tpl');
    }

    // 

    public function createStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student){
        $this->model->createStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student);
        $this->smarty->display('view/admin.tpl');

    }

    public function updateStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student){
        $this->model->updateStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student);
        $this->smarty->display('view/admin.tpl');
    }

    public function deleteStudents($login_student){
        $this->model->deleteStudents($login_student);
        $this->smarty->display('view/admin.tpl');
    }

    // 

    public function createCompany($name_company, $activity_company, $desc_company, $country_company, $pc_company, $city_company, $street_company, $numap_company, $pfp_company){
        $this->model->createCompany($name_company, $activity_company, $desc_company, $country_company, $pc_company, $city_company, $street_company, $numap_company, $pfp_company);
        $this->smarty->display('view/admin.tpl');
    }

    public function updateCompany($name_company, $activity_company, $desc_company, $country_company, $pc_company, $city_company, $street_company, $numap_company, $pfp_company){
        $this->model->updateCompany($name_company, $activity_company, $desc_company, $country_company, $pc_company, $city_company, $street_company, $numap_company, $pfp_company);
        $this->smarty->display('view/admin.tpl');
    }

    
    public function deleteCompany($name_company){
        $this->model->deleteCompany($name_company);
        $this->smarty->display('view/admin.tpl');
    }

    //

    public function createPilot($name_pilot, $fname_pilot, $mail_pilot, $login_pilot, $password_pilot, $promotion_pilot, $country_pilot, $pc_pilot, $city_pilot, $street_pilot, $numap_pilot, $activity_pilot){
        $this->model->createPilot($name_pilot, $fname_pilot, $mail_pilot, $login_pilot, $password_pilot, $promotion_pilot, $country_pilot, $pc_pilot, $city_pilot, $street_pilot, $numap_pilot, $activity_pilot);
        $this->smarty->display('view/admin.tpl');
    }

    public function updatePilot($name_pilot, $fname_pilot, $mail_pilot, $login_pilot, $password_pilot, $promotion_pilot, $country_pilot, $pc_pilot, $city_pilot, $street_pilot, $numap_pilot, $activity_pilot){
        $this->model->updatePilot($name_pilot, $fname_pilot, $mail_pilot, $login_pilot, $password_pilot, $promotion_pilot, $country_pilot, $pc_pilot, $city_pilot, $street_pilot, $numap_pilot, $activity_pilot);
        $this->smarty->display('view/admin.tpl');
    }

    public function deletePilot($login_pilot){
        // A implémenter
        $this->model->deletePilot($login_pilot);
        $this->smarty->display('view/admin.tpl');
    }
    
    //

    public function createOffer($name_offer, $desc_offer, $duration_offer, $start_offer, $end_offer, $hour_offer, $pricing_offer, $skills_offer, $nb_offer, $company_name){
        $this->model->createOffer($name_offer, $desc_offer, $duration_offer, $start_offer, $end_offer, $hour_offer, $pricing_offer, $skills_offer, $nb_offer, $company_name);
        $this->smarty->display('view/admin.tpl');
    }

    public function updateOffer($name_offer, $desc_offer, $duration_offer, $start_offer, $end_offer, $hour_offer, $pricing_offer, $skills_offer, $nb_offer, $company_name){
        //  ajouter la méthode 
        $this->model->updateOffer($name_offer, $desc_offer, $duration_offer, $start_offer, $end_offer, $hour_offer, $pricing_offer, $skills_offer, $nb_offer, $company_name);
        $this->smarty->display('view/admin.tpl');
    }

    public function deleteOffer($name_offer){
        // A implémenter
        $this->model->deleteOffer($name_offer);
        $this->smarty->display('view/admin.tpl');
    }



}


$pdo = Connexion();
$dashboardAController = new DashboardAController($pdo);





    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = isset($_POST["action"]) ? $_POST["action"] : '';

        
// ETUDIANT ----------------------------------------------------------------------------------------------------------        
        if ($action == 'createStudent') {
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


            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
        
            
            $dashboardAController->createStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student);
        }

        else if ($action == 'updateStudent') {
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

            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->updateStudents($name_student, $fname_student, $mail_student, $login_student, $password_student, $promotion_student, $country_student, $pc_student, $city_student, $street_student, $numap_student, $pfp_student);

        }

        else if ($action == 'deleteStudent') {
            $login_student = isset($_POST["login_student"]) ? $_POST["login_student"] : '';

            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->deleteStudents($login_student);
        }

// ENTREPRISE ----------------------------------------------------------------------------------------------------------
        else if ($action == 'createCompany') {
            $name_company = isset($_POST["name_company"]) ? $_POST["name_company"] : '';
            $activity_company = isset($_POST["activity_company"]) ? $_POST["activity_company"] : '';
            $desc_company = isset($_POST["desc_company"]) ? $_POST["desc_company"] : '';
            $country_company = isset($_POST["country_company"]) ? $_POST["country_company"] : '';
            $pc_company = isset($_POST["pc_company"]) ? $_POST["pc_company"] : '';
            $city_company = isset($_POST["city_company"]) ? $_POST["city_company"] : '';
            $street_company = isset($_POST["street_company"]) ? $_POST["street_company"] : '';
            $numap_company = isset($_POST["numap_company"]) ? $_POST["numap_company"] : '';
            $pfp_company = isset($_POST["pfp_company"]) ? $_POST["pfp_company"] : '';

            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->createCompany($name_company, $activity_company, $desc_company, $country_company, $pc_company, $city_company, $street_company, $numap_company, $pfp_company);
        }

        else if ($action =='updateCompany') {
            $name_company = isset($_POST["name_company"]) ? $_POST["name_company"] : '';
            $activity_company = isset($_POST["activity_company"]) ? $_POST["activity_company"] : '';
            $desc_company = isset($_POST["desc_company"]) ? $_POST["desc_company"] : '';
            $country_company = isset($_POST["country_company"]) ? $_POST["country_company"] : '';
            $pc_company = isset($_POST["pc_company"]) ? $_POST["pc_company"] : '';
            $city_company = isset($_POST["city_company"]) ? $_POST["city_company"] : '';
            $street_company = isset($_POST["street_company"]) ? $_POST["street_company"] : '';
            $numap_company = isset($_POST["numap_company"]) ? $_POST["numap_company"] : '';
            $pfp_company = isset($_POST["pfp_company"]) ? $_POST["pfp_company"] : '';

            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->updateCompany($name_company, $activity_company, $desc_company, $country_company, $pc_company, $city_company, $street_company, $numap_company, $pfp_company);
            
        }

        else if ($action =='deleteCompany') {
            $name_company = isset($_POST["name_company"]) ? $_POST["name_company"] : '';

        
            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->deleteCompany($name_company);
            
        }


// PILOTE ----------------------------------------------------------------------------------------------------------        

        else if ($action =='createPilot'){
            $name_pilot = isset($_POST["name_pilot"]) ? $_POST["name_pilot"] : '';
            $fname_pilot = isset($_POST["fname_pilot"]) ? $_POST["fname_pilot"] : '';
            $mail_pilot = isset($_POST["mail_pilot"]) ? $_POST["mail_pilot"] : '';
            $login_pilot = isset($_POST["login_pilot"]) ? $_POST["login_pilot"] : '';
            $password_pilot = isset($_POST["password_pilot"]) ? $_POST["password_pilot"] : '';
            $promotion_pilot = isset($_POST["promotion_pilot"]) ? $_POST["promotion_pilot"] : '';
            $country_pilot = isset($_POST["country_pilot"]) ? $_POST["country_pilot"] : '';
            $pc_pilot = isset($_POST["pc_pilot"]) ? $_POST["pc_pilot"] : '';
            $city_pilot = isset($_POST["city_pilot"]) ? $_POST["city_pilot"] : '';
            $street_pilot = isset($_POST["street_pilot"]) ? $_POST["street_pilot"] : '';
            $numap_pilot = isset($_POST["numap_pilot"]) ? $_POST["numap_pilot"] : '';
            $activity_pilot = isset($_POST["activity_pilot"]) ? $_POST["activity_pilot"] : '';

            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->createPilot($name_pilot, $fname_pilot, $mail_pilot, $login_pilot, $password_pilot, $promotion_pilot, $country_pilot, $pc_pilot, $city_pilot, $street_pilot, $numap_pilot, $activity_pilot);

        }

        else if ($action =='updatePilot'){
            $name_pilot = isset($_POST["name_pilot"]) ? $_POST["name_pilot"] : '';
            $fname_pilot = isset($_POST["fname_pilot"]) ? $_POST["fname_pilot"] : '';
            $mail_pilot = isset($_POST["mail_pilot"]) ? $_POST["mail_pilot"] : '';
            $login_pilot = isset($_POST["login_pilot"]) ? $_POST["login_pilot"] : '';
            $password_pilot = isset($_POST["password_pilot"]) ? $_POST["password_pilot"] : '';
            $promotion_pilot = isset($_POST["promotion_pilot"]) ? $_POST["promotion_pilot"] : '';
            $country_pilot = isset($_POST["country_pilot"]) ? $_POST["country_pilot"] : '';
            $pc_pilot = isset($_POST["pc_pilot"]) ? $_POST["pc_pilot"] : '';
            $city_pilot = isset($_POST["city_pilot"]) ? $_POST["city_pilot"] : '';
            $street_pilot = isset($_POST["street_pilot"]) ? $_POST["street_pilot"] : '';
            $numap_pilot = isset($_POST["numap_pilot"]) ? $_POST["numap_pilot"] : '';
            $activity_pilot = isset($_POST["activity_pilot"]) ? $_POST["activity_pilot"] : '';
            

            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->updatePilot($name_pilot, $fname_pilot, $mail_pilot, $login_pilot, $password_pilot, $promotion_pilot, $country_pilot, $pc_pilot, $city_pilot, $street_pilot, $numap_pilot, $activity_pilot);

        }

        else if ($action == 'deletePilot') {
            $login_pilot = isset($_POST["login_pilot"]) ? $_POST["login_pilot"] : '';

            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->deletePilot($login_pilot);

        }

// OFFRE ----------------------------------------------------------------------------------------------------------

        else if ($action =='createOffer'){
            $name_offer = isset($_POST["name_offer"]) ? $_POST["name_offer"] : '';
            $desc_offer = isset($_POST["desc_offer"]) ? $_POST["desc_offer"] : '';
            $duration_offer = isset($_POST["duration_offer"]) ? $_POST["duration_offer"] : '';
            $start_offer = isset($_POST["start_offer"]) ? $_POST["start_offer"] : '';
            $end_offer = isset($_POST["end_offer"]) ? $_POST["end_offer"] : '';
            $hour_offer = isset($_POST["hour_offer"]) ? $_POST["hour_offer"] : '';
            $pricing_offer = isset($_POST["pricing_offer"]) ? $_POST["pricing_offer"] : '';
            $skills_offer = isset($_POST["skills_offer"]) ? $_POST["skills_offer"] : '';
            $nb_offer = isset($_POST["nb_offer"]) ? $_POST["nb_offer"] : '';
            $company_name = isset($_POST["company_name"]) ? $_POST["company_name"] : '';
            
            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->createOffer($name_offer, $desc_offer, $duration_offer, $start_offer, $end_offer, $hour_offer, $pricing_offer, $skills_offer, $nb_offer, $company_name);
        }


        
        else if ($action =='updateOffer'){
            $name_offer = isset($_POST["name_offer"]) ? $_POST["name_offer"] : '';
            $desc_offer = isset($_POST["desc_offer"]) ? $_POST["desc_offer"] : '';
            $duration_offer = isset($_POST["duration_offer"]) ? $_POST["duration_offer"] : '';
            $start_offer = isset($_POST["start_offer"]) ? $_POST["start_offer"] : '';
            $end_offer = isset($_POST["end_offer"]) ? $_POST["end_offer"] : '';
            $hour_offer = isset($_POST["hour_offer"]) ? $_POST["hour_offer"] : '';
            $pricing_offer = isset($_POST["pricing_offer"]) ? $_POST["pricing_offer"] : '';
            $skills_offer = isset($_POST["skills_offer"]) ? $_POST["skills_offer"] : '';
            $nb_offer = isset($_POST["nb_offer"]) ? $_POST["nb_offer"] : '';
            $company_name = isset($_POST["company_name"]) ? $_POST["company_name"] : '';
            
            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->updateOffer($name_offer, $desc_offer, $duration_offer, $start_offer, $end_offer, $hour_offer, $pricing_offer, $skills_offer, $nb_offer, $company_name);
            
        }

        else if ($action == 'deleteOffer') {
            $name_offer = isset($_POST["name_offer"]) ? $_POST["name_offer"] : '';

            $pdo = Connexion();
            $dashboardAController = new DashboardAController($pdo);
            $dashboardAController->deleteOffer($name_offer);
        }
    }

    else {
    $pdo = Connexion();
        $dashboardAController = new DashboardAController($pdo);
        $dashboardAController->display();
    }

?>
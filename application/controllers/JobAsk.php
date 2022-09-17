<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Services extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
        if (! isset($_SESSION['userdata'])) {
            redirect(base_url("Dashboard/registration"));
        }
    }

    public function index()
    {
        if (isset($_SESSION['userdata']['company_id'])) {
            $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");
            $data['key_skills'] = $this->Base_Models->GetAllValues("conbrid_key_skills");
            $data['technical_skills'] = $this->Base_Models->GetAllValues("conbrid_technical_skills");

            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("company/post_job", $data);
            $this->load->view("common/footer");
        }
    }

    public function get_cities()
    {
        $cities = array();
        if (isset($_POST['state_id']) && $_POST['state_id'] != 0) {
            $cities = $this->Base_Models->CustomeQuary("select * from conbrid_cities where state_id=".$_POST['state_id']." ORDER BY city_name asc");
        }
        echo json_encode($cities);
    }

    public function get_individuals()
    {
        $join_table_name = "";
        $key_where_condition = "";
        $technical_where_condition = "";
        if (isset($_POST['key_id']) && is_array($_POST['key_id'])) {
            $join_table_name .= ",conbrid_key_skills";
            $key_where_condition = " and conbrid_individuals.id=conbrid_key_skills.individual_id and ( ";
            for ($i = 0; $i < count($_POST['key_id']); $i ++) {
                if ($i == 0) {
                    $key_where_condition .= " conbrid_key_skills.key_skills='" . $_POST['key_id'][$i] . "'";
                } else {
                    $key_where_condition .= " OR conbrid_key_skills.key_skills='" . $_POST['key_id'][$i] . "'";
                }
            }
            $key_where_condition .= ")";
        }
        if (isset($_POST['technical_id']) && is_array($_POST['technical_id'])) {
            $join_table_name .= ",conbrid_technical_skills";
            $technical_where_condition = " and conbrid_individuals.id=conbrid_technical_skills.individual_id and ( ";
            for ($i = 0; $i < count($_POST['technical_id']); $i ++) {
                if ($i == 0) {
                    $technical_where_condition .= " conbrid_technical_skills.technical_skills='" . $_POST['technical_id'][$i] . "'";
                } else {
                    $technical_where_condition .= " OR conbrid_technical_skills.technical_skills='" . $_POST['technical_id'][$i] . "'";
                }
            }
            $technical_where_condition .= ")";
        }
        $job_designation = "";
        $job_type = "";
        if (isset($_POST['job_designation']) && $_POST['job_designation'] != "") {
            $job_designation = " and conbrid_individuals.preferred_jd='" . $_POST['job_designation'] . "' ";
        }
        if (isset($_POST['job_type']) && $_POST['job_type'] != "") {
            $job_type = " and conbrid_individuals.preferred_job_type='" . $_POST['job_type'] . "' ";
        }

        $data = $this->Base_Models->CustomeQuary("select conbrid_individuals.id as individual_id from conbrid_individuals,conbrid_users " . $join_table_name . " where
       conbrid_individuals.state='" . $_POST['state_id'] . "' and conbrid_individuals.city='" . $_POST['city_id'] . "' and
       conbrid_users.sub_category='" . $_POST['individual_type'] . "' and conbrid_users.id=conbrid_individuals.user_id " . $technical_where_condition . $key_where_condition . $job_designation . $job_type . "
      group by conbrid_individuals.id
       ");

        if (empty($data)) {
            $countdata[0]['total_individuals'] = 0;
        } else {
            $countdata[0]['total_individuals'] = count($data);
        }
        echo json_encode($countdata);
    }

    public function generate_post()
    {
        if (isset($_SESSION['userdata']['company_id'])) {
            $join_table_name = "";
            $key_where_condition = "";
            $technical_where_condition = "";
            if (isset($_POST['key_id']) && is_array($_POST['key_id'])) {
                $data1['key_skills'] = "'test'";
                $join_table_name .= ",conbrid_key_skills";
                $key_where_condition = " and conbrid_individuals.id=conbrid_key_skills.individual_id and ( ";
                for ($i = 0; $i < count($_POST['key_id']); $i ++) {
                    if ($i == 0) {
                        $key_where_condition .= " conbrid_key_skills.key_skills='" . $_POST['key_id'][$i] . "'";
                    } else {
                        $key_where_condition .= " OR conbrid_key_skills.key_skills='" . $_POST['key_id'][$i] . "'";
                    }
                    $data1['key_skills'] .= ",'" . $_POST['key_id'][$i] . "'";
                }
                $key_where_condition .= ")";
            }
            if (isset($_POST['technical_id']) && is_array($_POST['technical_id'])) {
                $data1['technical_skills'] = "'test'";
                $join_table_name .= ",conbrid_technical_skills";
                $technical_where_condition = " and conbrid_individuals.id=conbrid_technical_skills.individual_id and ( ";
                for ($i = 0; $i < count($_POST['technical_id']); $i ++) {
                    if ($i == 0) {
                        $technical_where_condition .= " conbrid_technical_skills.technical_skills='" . $_POST['technical_id'][$i] . "'";
                    } else {
                        $technical_where_condition .= " OR conbrid_technical_skills.technical_skills='" . $_POST['technical_id'][$i] . "'";
                    }
                    $data1['technical_skills'] .= ",'" . $_POST['technical_id'][$i] . "'";
                }
                $technical_where_condition .= ")";
            }
            $job_designation = "";
            $job_type = "";
            if (isset($_POST['job_designation']) && $_POST['job_designation'] != "") {
                $data1['job_designation'] = $_POST['job_designation'];
                $job_designation = " and conbrid_individuals.preferred_jd='" . $_POST['job_designation'] . "' ";
            }
            if (isset($_POST['job_type']) && $_POST['job_type'] != "") {
                $data1['job_type'] = $_POST['job_type'];
                $job_type = " and conbrid_individuals.preferred_job_type='" . $_POST['job_type'] . "' ";
            }
            $data1['city'] = $_POST['city_id'];
            $data1['state'] = $_POST['state_id'];
            $data1['individual_type'] = $_POST['individual_type'];
            $data1['company_id'] = $_SESSION['userdata']['company_id'];

            $data = $this->Base_Models->CustomeQuary("select conbrid_individuals.id as individual_id from conbrid_individuals,conbrid_users " . $join_table_name . " where
       conbrid_individuals.state='" . $_POST['state_id'] . "' and conbrid_individuals.city='" . $_POST['city_id'] . "' and
       conbrid_users.sub_category='" . $_POST['individual_type'] . "' and conbrid_users.id=conbrid_individuals.user_id " . $technical_where_condition . $key_where_condition . $job_designation . $job_type . "
      group by conbrid_individuals.id
       ");
            $this->Base_Models->AddValues("conbrid_company_job_post", $data1);

            $company_name = $this->Base_Models->GetAllValues("conbrid_companies", array(
                "id" => $data1['company_id']
            ), "company_name");
            if (! empty($company_name)) {
                $notification_title = "New Job Post";
                $notification_text = "There is a new job post by <b>" . $company_name[0]['company_name'] . " Company </b> you might have interest";
                for ($k = 0; $k < count($data); $k ++) {
                    $data2['individual_id'] = $data[$k]['individual_id'];
                    $data2['company_id'] = $data1['company_id'];
                    $data2['title'] = $notification_title;
                    $data2['text'] = $notification_text;
                    $data2['datetime'] = date("Y-m-d h:i:s");
                    $data2['type'] = "Job Post";
                    $this->Base_Models->AddValues("conbrid_individual_notification", $data2);
                }
            }

            // print_r($_SESSION);
            if (empty($data)) {

                // $data[0]['total_individuals']=0;
            }
            // echo json_encode($data);
        }
    }

    # =======================================================================================================================================
    # Construction Contracts
    public function construction_contracts_list()
    {
        $data = array();
        if (isset($_SESSION['userdata']['category']) && (($_SESSION['userdata']['category'] == "Companies" && $_SESSION['userdata']['login_type'] == "Builder and developer company") || $_SESSION['userdata']['category'] == "Customers")) {
            $data['contracts'] = $this->Base_Models->GetAllValues("conbrid_construction_contracts", array(
                "user_type" => "Companies",
                "user_id" => $_SESSION['userdata']['company_id']
            ));

            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("company/construction_contracts_list", $data);
            $this->load->view("common/footer");
        } else if (isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category'] == "Companies") {
            $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");

            $this->load->view("common/header");
            $this->load->view("common/left");
            $this->load->view("company/show_construction_contracts", $data);
            $this->load->view("common/footer");
        }
    }

public function view_job_post($id = null)
    {
        $data = array();
       # if (isset($_SESSION['userdata']['company_id'])) {
    #    $data['contracts'] = $this->Base_Models->GetAllValues("conbrid_construction_contracts", array(
     #           "user_type" => "Companies",
      #          "id" => $id
       #     ));
        #}
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("company/job_post_view", $data);
        $this->load->view("common/footer");
    }

    public function view_construction_contract($id = null)
    {
        $data = array();
       # if (isset($_SESSION['userdata']['company_id'])) {
    #    $data['contracts'] = $this->Base_Models->GetAllValues("conbrid_construction_contracts", array(
     #           "user_type" => "Companies",
      #          "id" => $id
       #     ));
        #}
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("company/construction_contracts_view", $data);
        $this->load->view("common/footer");
    }

    public function construction_contracts()
    {
        $data['states'] = $this->Base_Models->GetAllValues("conbrid_states");

        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("company/construction_contracts", $data);
        $this->load->view("common/footer");
    }

    public function get_scope_of_work()
    {
        $data = $this->Base_Models->CustomeQuary("select * from conbrid_scope_of_work where status in (5," . $_POST['construction_type'] . ")");
        echo json_Encode($data);
    }

    public function accept_construction_contracts()
    {
        $data['description'] = $_POST['description'];
        $data['address1'] = $_POST['address1'];
        $data['landmark'] = $_POST['landmark'];
        $data['area'] = $_POST['area'];
        $data['state_id'] = $_POST['state_id'];
        $data['pincode'] = $_POST['pincode'];
        if ($_SESSION['userdata']['category'] == "Companies") {
            $data['user_type'] = $_SESSION['userdata']['category'];
            $data['user_id'] = $_SESSION['userdata']['company_id'];
        }
        $data['type_of_construction'] = $_POST['type_of_construction'];
        if ($data['type_of_construction'] == "new_construction") {
            $data['type_of_property'] = $_POST['type_of_property1'];
            $data['number_of_floors'] = $_POST['number_of_floors1'];
            $data['total_sq_ft_area'] = $_POST['total_sq_ft_area1'];
            $data['total_builtup_area'] = $_POST['total_builtup_area1'];
            $data['contract_category'] = $_POST['contract_category1'];
            $data['project_start_date'] = $_POST['project_start_date1'];
            $data['project_end_date'] = $_POST['project_end_date1'];
            if (isset($_POST['contract_type']))
                $data['contract_type'] = $_POST['contract_type'];
            if (isset($_POST['contract_rate']))
                $data['contract_rate'] = $_POST['contract_rate'];
        } elseif ($data['type_of_construction'] == "demolition_construction") {
            $data['type_of_property'] = $_POST['type_of_property2'];
            $data['number_of_floors'] = $_POST['number_of_floors2'];
            $data['total_sq_ft_area'] = $_POST['total_sq_ft_area2'];
            $data['total_builtup_area'] = $_POST['total_builtup_area2'];
            $data['contract_category'] = $_POST['contract_category2'];
            $data['project_start_date'] = $_POST['project_start_date2'];
            $data['project_end_date'] = $_POST['project_end_date2'];
            $data['contract_type'] = $_POST['contract_type'];
            $data['contract_rate'] = $_POST['contract_rate'];
            $data['demolition_rate_type'] = $_POST['demolition_rate_type2'];
            $data['demolition_rate'] = $_POST['demolition_rate2'];
        } elseif ($data['type_of_construction'] == "renovation") {
            $data['type_of_property'] = $_POST['type_of_property3'];
            $data['number_of_floors'] = $_POST['number_of_floors3'];
            $data['type_of_contract'] = $_POST['type_of_contract'];
            $data['rate_of_contract'] = $_POST['rate_of_contract'];
            $data['project_start_date'] = $_POST['project_start_date3'];
            $data['project_end_date'] = $_POST['project_end_date3'];
        }
        $data['default_date'] = date("Y-m-d h:i:s");
$data1 = $this->Base_Models->CustomeQuary("select conbrid_companies.id as company_id from conbrid_companies where
       state='" . $_POST['state_id'] . "' and city='" . $_POST['city_id'] . "' and
     id!=".$_SESSION['userdata']['company_id']);
  $company_name = $this->Base_Models->GetAllValues("conbrid_companies", array(
                "id" => $_SESSION['userdata']['company_id']
            ));
 if (! empty($data1)) {
                $notification_title = "New Construction Contract";
                $notification_text = "There is a Construction Contract post by <b>" . $company_name[0]['company_name'] . " Company </b> you might have interest";
                for ($k = 0; $k < count($data1); $k ++) {
                    $data2['post_by_company_id'] = $_SESSION['userdata']['company_id'];
                    $data2['company_id'] = $data1[$k]['company_id'];
                    $data2['title'] = $notification_title;
                    $data2['text'] = $notification_text;
                    $data2['datetime'] = date("Y-m-d h:i:s");
                    $data2['type'] = "Construction_contract Post";
                    $this->Base_Models->AddValues("conbrid_company_notification", $data2);
                }
            }

        $this->Base_Models->AddValues("conbrid_construction_contracts", $data);
    }
}
?>
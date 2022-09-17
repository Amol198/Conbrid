<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
    }

    public function index()
    {
		$data=array();
        if(isset($_SESSION['userdata']['individual_id'])){ 
             $data['notifications']=$this->Base_Models->CustomeQuary("select * from conbrid_individual_notification where individual_id=".$_SESSION['userdata']['individual_id']." ORDER BY id desc");
     $data['url']=base_url("Services/view_job_post");
        }
        if(isset($_SESSION['userdata']['company_id'])){ 
             $data['notifications']=$this->Base_Models->CustomeQuary("select * from conbrid_company_notification where company_id=".$_SESSION['userdata']['company_id']." ORDER BY id desc");
     $data['url']=base_url("Services/view_construction_contract");
     
        }
        $this->view("index",$data);
    }

    public function index2()
    {
        $this->load->view("index2");
    }

    public function registration($type=null,$promocode=null)
    {$data=array();
        if($type!=null && $promocode!=null){
            $data['type']=$type;
            $data['promocode']=base64_decode($promocode);
        }
        $this->load->view("registration",$data);
    }

    public function check_user()
    {
        $data = $this->Base_Models->CustomeQuary("select * from conbrid_users where mobile_no='" . $_POST['username'] . "'
        OR username='" . $_POST['username'] . "'
        ");
        if (! empty($data)) {
            echo "user_exists";
        } else {
            echo "user_not_exists";
        }
    }

    public function check_company()
    {
        $data = $this->Base_Models->CustomeQuary("select * from conbrid_users where mobile_no='" . $_POST['email'] . "'
        OR username='" . $_POST['email'] . "'
        ");
        $data['sub_category'] = 0;
        $data['type'] = 0;
        if (! empty($data) && isset($data[0]['category']) && $data[0]['category'] == "Companies" && $data[0]['sub_category'] != "") {
            $data['sub_category'] = explode(',', $data[0]['sub_category']);
            $data['type'] = 1;
        }
        echo json_encode($data);
    }

    public function accept_login()
    {
if(isset($_POST['login_type']) && $_POST['login_type']=="Select"){
    $_SESSION['logged_in'] = "<p style='color:red;'>Please select sub category</p>";
            redirect(base_url("Dashboard/registration"));
}
        $data = $this->Base_Models->CustomeQuary("select * from conbrid_users where (mobile_no='" . $_POST['login_email'] . "'
        OR username='" . $_POST['login_email'] . "') and password='" . $_POST['login_password'] . "'
        ");

        if (! empty($data)) {
            $_SESSION['userdata'] = $data[0];
            if(isset($_POST['login_type'])){
                $_SESSION['userdata']['login_type'] = $_POST['login_type'];
            }
else{
           $_SESSION['userdata']['login_type'] = "individual";
         
}
            if($data[0]['category']=="Companies"){
                $company_data = $this->Base_Models->CustomeQuary("select * from conbrid_companies where
                user_id=".$data[0]['id']."
                ");
                if(!empty($company_data)){
                    $_SESSION['userdata']['company_id']=$company_data[0]['id'];
                }
   
            }
             else if($data[0]['category']=="Individuals"){
                $individual_data = $this->Base_Models->CustomeQuary("select * from conbrid_individuals where
                user_id=".$data[0]['id']."
                ");
                if(!empty($individual_data)){
                    $_SESSION['userdata']['individual_id']=$individual_data[0]['id'];
                }
   
            }
            
            
            redirect(base_url("Dashboard"));
        } else {
            $_SESSION['logged_in'] = "<p style='color:red;'>Please enter valid username and password</p>";
            redirect(base_url("Dashboard/registration"));
        }
    }

    public function accept_registration()
    {
        if ($_POST['category'] == "Companies") {
            $data['sub_category_'] = "Select";
           
            foreach ($_POST['sub_category'] as $row) {
                $data['sub_category_'] .= "," . $row;
            }
            $_POST['sub_category'] = $data['sub_category_'];
        }

        $id=$this->Base_Models->AddValues("conbrid_users", $_POST);
        $promo_code=$this->generateRandomString();
        $promo_code=$promo_code."-".$id;
 $this->Base_Models->UpadateValue("conbrid_users",array("promo_code"=>$promo_code),array("id"=>$id));    
   
        redirect(base_url("Dashboard/registration"));
    }
    

    /*
     * public function utf8_urldecode($str)
     * {
     * return html_entity_decode(preg_replace("/%u([0-9a-f]{3,4})/i", "&#x\\1;", urldecode($str)), null, 'UTF-8');
     * }
     */

    // Change password and forgot password Starts
    public function passwords()
    {
        $this->load->view("passwords");
    }

    public function get_otp()
    {
        $data = $this->Base_Models->CustomeQuary("select * from 
      conbrid_users where mobile_no='" . $_POST['mobile_number'] . "'");
        if (! empty($data)) {
            $data['otp'] = rand(000000, 999999);
            $this->Base_Models->CustomeUpdateQuary("update 
      conbrid_users SET otp='123456' where id='" . $data[0]['id'] . "'");
        } else {
            $data['otp'] = 0;
        }
        echo json_encode($data);
    }

    public function change_username()
    {
        if (isset($_POST['old_password'])) {
            $data = $this->Base_Models->CustomeQuary("select * from 
      conbrid_users where mobile_no='" . $_POST['mobile_number'] . "' and username='" . $_POST['old_password'] . "'");
            if (! empty($data)) {
                $flag = 1;
                $this->Base_Models->CustomeUpdateQuary("update
      conbrid_users SET username='" . $_POST['new_password'] . "' where mobile_no='" . $_POST['mobile_number'] . "'");
                echo $flag;
            } else {
                $flag = 0;
                echo $flag;
            }
        } else {
            $this->Base_Models->CustomeUpdateQuary("update
      conbrid_users SET username='" . $_POST['new_password'] . "' where mobile_no='" . $_POST['mobile_number'] . "'");
        }
    }

    public function change_password()
    {
        if (isset($_POST['old_password'])) {
            $data = $this->Base_Models->CustomeQuary("select * from 
      conbrid_users where mobile_no='" . $_POST['mobile_number'] . "' and password='" . $_POST['old_password'] . "'");
            if (! empty($data)) {
                $flag = 1;
                $this->Base_Models->CustomeUpdateQuary("update
      conbrid_users SET password='" . $_POST['new_password'] . "' where mobile_no='" . $_POST['mobile_number'] . "'");
                echo $flag;
            } else {
                $flag = 0;
                echo $flag;
            }
        } else {
            $this->Base_Models->CustomeUpdateQuary("update
      conbrid_users SET password='" . $_POST['new_password'] . "' where mobile_no='" . $_POST['mobile_number'] . "'");
        }
    }

    // Change password and forgot password Ends
    public function usernames()
    {
        $this->load->view("usernames");
    }
    public function logout()
    {
session_destroy();
redirect(base_url("Dashboard/registration"));
    }
}
?>
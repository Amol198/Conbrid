<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Customer_Property extends Base_Controller {
	public function __construct() {
		parent::__construct ();
	}
public function index(){
	    
	    
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "admin/adminbody");
		$this->load->view ( "admin/includes/footer");
	}

	public function sell_property(){
	    
	    $data ['title'] = "Sell Property";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_customer_sell_property");
        $data ['display_contents'] = array (
        				"id" => "Id",
        				"main_type_of_property" => "Main Type of Property",
        				"sub_categories" => "Sub Categories",
        				"property_type" => "Property Type",
        				"customer_name" => "Customer Name",
        				"project_name" => "Project Name",
        				"status" =>"status",
        				
					
						"actions" => "Action"
        				);
						foreach ($data['table_data'] as $key => $row) {
						$data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Customer_Property/view_customer_sell_property/'.$data['table_data'][$key]['id']). "' class='btn btn-primary'>View</a>";
					 
						if($data['table_data'][$key]['status']=="approved"){
							$data['table_data'][$key]['status']="<b style='color:green'>Approved</b>";
						}elseif($data['table_data'][$key]['status']=="rejected"){
							$data['table_data'][$key]['status']="<b style='color:red'>Rejected</b>";
						}



					
					}
						
      
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}

	public function rental_property(){
	    
	    $data ['title'] = "Rental Property";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_customer_rental_property");
        $data ['display_contents'] = array (
        				"id" => "Id",
        				"main_type_of_property" => "Main Type of Property",

        				"property_type" => "Property Type",
        				"customer_name" => "Customer Name",
        				
        				"monthly_rent" => "Monthly Rent Amount",
        				"builtup_area" => "Built-Up Area",
        				"status" => "status",
					    
						"actions" => "Action"
        				);
						foreach ($data['table_data'] as $key => $row) {
						$data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Customer_Property/view_customer_rental_property/'.$data['table_data'][$key]['id']). "' class='btn btn-primary'>View</a>";

						if($data['table_data'][$key]['status']=="approved"){
							$data['table_data'][$key]['status']="<b style='color:green'>Approved</b>";
						}elseif($data['table_data'][$key]['status']=="rejected"){
							$data['table_data'][$key]['status']="<b style='color:red'>Rejected</b>";
						}



					}
						
      
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}

	public function lease_property(){
	    
	    $data ['title'] = "Lease Property";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_customer_lease_property");
        $data ['display_contents'] = array (
        				"id" => "Id",
        				"main_type_of_property" => "Main Type of Property",
        				"property_type" => "Property Type",
        				"customer_name" => "Customer Name",
        				"lease_amount" => "Lease Amount",
        			    "builtup_area" => "Built-Up Area",
					     "status" => "status",
						"actions" => "Action"
        				);
						foreach ($data['table_data'] as $key => $row) {
						$data['table_data'][$key]['actions'] = " <a  href='" . base_url('admin/Customer_Property/view_customer_lease_property/'.$data['table_data'][$key]['id']). "' class='btn btn-primary'>View</a>";
						
						if($data['table_data'][$key]['status']=="approved"){
							$data['table_data'][$key]['status']="<b style='color:green'>Approved</b>";
						}elseif($data['table_data'][$key]['status']=="rejected"){
							$data['table_data'][$key]['status']="<b style='color:red'>Rejected</b>";
						}

					


						
					 
					  }
						
      
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}




	public function view_customer_sell_property($id){
		

		$data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_customer_sell_property",array("id"=>$id));
        if(!empty($temp)){
         $data=$temp[0]; 

	$data['page_title'] = 'Sell Property Details'; 
    
 


$this->load->view ( "admin/includes/header");
$this->load->view ( "admin/includes/top");
$this->load->view ( "admin/includes/nav");
$this->load->view ( "admin/customer_property/view_customer_sell_property", $data );
$this->load->view ( "admin/includes/footer");
	
	  }  
	} 
	public function view_customer_rental_property($id){
		

		$data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_customer_rental_property",array("id"=>$id));
       if(!empty($temp)){
        $data=$temp[0]; 

	$data['page_title'] = 'Rental Property Details'; 
 


$this->load->view ( "admin/includes/header");
$this->load->view ( "admin/includes/top");
$this->load->view ( "admin/includes/nav");
$this->load->view ( "admin/customer_property/view_customer_rental_property", $data );
$this->load->view ( "admin/includes/footer");
	
	   }  
	} 
	public function view_customer_lease_property($id){
		

		$data=array();
	    $temp= $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_customer_lease_property",array("id"=>$id));
       if(!empty($temp)){
        $data=$temp[0]; 

	$data['page_title'] = 'Lease Property Details'; 
 


$this->load->view ( "admin/includes/header");
$this->load->view ( "admin/includes/top");
$this->load->view ( "admin/includes/nav");
$this->load->view ( "admin/customer_property/view_customer_lease_property", $data );
$this->load->view ( "admin/includes/footer");
	
	   }  
	}
	
	public function accept_sell_property($id){

		$data['note']=$_POST['note'];
		$data['status']=0;
	if (isset($_POST['status']) && $_POST['status'] == "approve") {
		$data['status'] = "approved";
		
	} elseif (isset($_POST['status']) && $_POST['status'] == "reject") {
		$data['status'] = "rejected";
		
	}

	
		$this->Base_Models->UpadateValue("conbrid_customer_sell_property", $data, array("id" => $id));
		redirect(base_url("admin/Customer_Property/sell_property"));
	

	}

	public function accept_rental_property($id){

		$data['note']=$_POST['note'];
		$data['status']=0;
	if (isset($_POST['status']) && $_POST['status'] == "approve") {
		$data['status'] = "approved";
		
	} elseif (isset($_POST['status']) && $_POST['status'] == "reject") {
		$data['status'] = "rejected";
		
	}

	
		$this->Base_Models->UpadateValue("conbrid_customer_rental_property", $data, array("id" => $id));
		redirect(base_url("admin/Customer_Proprty/rental_property"));
	

	}

	public function accept_lease_property($id){

		$data['note']=$_POST['note'];
		$data['status']=0;
	if (isset($_POST['status']) && $_POST['status'] == "approve") {
		$data['status'] = "approved";
		
	} elseif (isset($_POST['status']) && $_POST['status'] == "reject") {
		$data['status'] = "rejected";
		
	}

	
		$this->Base_Models->UpadateValue("conbrid_customer_lease_property", $data, array("id" => $id));
		redirect(base_url("admin/Customer_Property/lease_property"));
	

	}
	
		}?>
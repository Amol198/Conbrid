<?php
require_once APPPATH . 'core/Base_Controller.php';
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Master extends Base_Controller {
	public function __construct() {
		parent::__construct ();
	}
// public function index(){
	    
	    
// 		$this->load->view ( "admin/includes/header");
// 		$this->load->view ( "admin/includes/top");
// 		$this->load->view ( "admin/includes/nav");
// 		$this->load->view ( "admin/adminbody");
// 		$this->load->view ( "admin/includes/footer");
// 	}
	public function State(){
	    
	    $data ['title'] = "State";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_states");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"name" => "Name"
        			
        				);
      
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
	
	
	public function City(){
	    
	    $data ['title'] = "City";

        $data ['table_data'] = $this->Base_Models->GetAllValues ( "conbrid_cities",null,"*,(select name from conbrid_states where id=state_id) as state_name");
        $data ['display_contents'] = array (
        				"id" => "id",
        				"city_name" => "City Name",
        			    "state_name" => "State Name"
        				);
      
		$this->load->view ( "admin/includes/header");
		$this->load->view ( "admin/includes/top");
		$this->load->view ( "admin/includes/nav");
		$this->load->view ( "common/table-view", $data );
		$this->load->view ( "admin/includes/footer");
	}
}
	?>
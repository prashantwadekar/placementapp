<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobgrid extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Branch_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Branch_model->getallBranch();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view.html');
		$this->load->view('Jobgrid/jobgrid_view.html');
		$this->load->view('common/footer_view.html');
	

	}


    function insertBranch(){
     $branch_name= $this->input->post('branch_name'); 
   

      
      
     
       $fields=array('branch_name'=>$branch_name,
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("branch_master",$fields);
   } 
	
	
}

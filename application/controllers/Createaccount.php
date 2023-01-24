<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createaccount extends CI_Controller {
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
		//$this->load->view('common/header_view.html');
		$this->load->view('Createaccount/createaccount_view');
		//$this->load->view('common/footer_view.html');
	

	}


    function insertSignup(){
     $std_prn= $this->input->post('std_prn'); 
     $std_username= $this->input->post('std_username'); 
     $std_password= $this->input->post('std_password'); 
     $std_email= $this->input->post('std_email'); 
     $std_phone= $this->input->post('std_phone'); 
   

      
      
     
       $fields=array('std_prn'=>$std_prn,
                      'std_username'=>$std_username,
                      'std_password'=>$std_password,
                      'std_email'=>$std_email,
                      'std_phone'=>$std_phone,
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("createaccount_master",$fields);
   } 
	
	
}

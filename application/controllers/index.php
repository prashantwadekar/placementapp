<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('job_model');
        $this->load->database();
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Branch_model->getallBranch();
   
        $data['jobs'] = $this->job_model->get_openings();

		$this->load->view('common/header_view.html');
		$this->load->view('Home/index_view',$data);
		$this->load->view('common/footer_view.html');
	

	}
    
    	
	
}

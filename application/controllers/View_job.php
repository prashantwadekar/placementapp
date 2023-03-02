<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_job extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Branch_model');
         $this->load->model('job_model');
         $this->load->database();
        
    }
	
	
	public function index()
	{

             // Get the opening ID from the URL
        // $data['data']=$this->Branch_model->getallBranch();
        // echo "<pre>";
        // print_r($data);
        $id = $this->uri->segment(2);
        $opening = $this->job_model->get_opening_by_id($id);

        $data['opening'] = $opening;

		$this->load->view('common/header_view.html');
		$this->load->view('JobDetail/jobdetail_view', $data);
		$this->load->view('common/footer_view.html');
	

	}	
}

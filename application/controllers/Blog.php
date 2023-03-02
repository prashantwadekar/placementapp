<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Branch_model');
        $this->load->model('job_model');
        $this->load->database();
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Branch_model->getallBranch();
        // echo "<pre>";
        // print_r($data);
        $data['blogs'] = $this->job_model->get_blogs();
		$this->load->view('common/header_view.html');
		$this->load->view('Blog/blog_view',$data);
		$this->load->view('common/footer_view.html');
	

	}

	
}

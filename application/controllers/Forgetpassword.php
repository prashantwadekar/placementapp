<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgetpassword extends CI_Controller {
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
		$this->load->view('Forgetpassword/forgetpassword_view');
		//$this->load->view('common/footer_view.html');
	

	}

    function forgetpassword()
	{
		
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('std_email','std_email','required');

			if($this->form_validation->run()==TRUE)
			{
				$std_email = $this->input->post('std_email');
				


				$this->load->model('Forget_model');
				$status = $this->Forget_model->checkEmail($std_email);
				if($status!=false)
				{
					$std_email= $status->std_email;
				

					$session_data = array(
						'std_email'=>$std_email,
						
					);

					$this->session->set_userdata('UserLoginSession',$session_data);

					redirect(base_url('Resetpassword'));
				}
				else
				{
					
					$this->session->set_flashdata('error','Usename or Password not matched');
					 redirect(base_url('forgetpassword'));
				}
				

			}
			else
			{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('login'));
			}
		}
	}



	
}

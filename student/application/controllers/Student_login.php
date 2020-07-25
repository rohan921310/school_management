<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_login extends CI_Controller {

	public function index()
	{
		
		$this->load->view('student_login');
	}
	public function login_check()
	{	
         $resutl=$this->Student_login_model->admin_login();
         if($resutl) {
			redirect(base_url().'index.php/student');
		} else {
			$this->session->set_flashdata('error', 'Invalid Details');

			redirect(base_url());
		}
	
    }
    
    public function logout(){

        $this->session->unset_userdata('username');
		$this->session->unset_userdata('class');
        $this->session->unset_userdata('class_id');
        redirect(base_url());
    
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_login extends CI_Controller {

	public function index()
	{
		
		$this->load->view('teacher_login');
	}
	public function login_check()
	{	
         $resutl=$this->Teacher_login_model->admin_login();
         if($resutl) {
			redirect(base_url().'index.php/teacher');
		} else {
			$this->session->set_flashdata('error', 'Invalid Details');

			redirect(base_url());
		}
		
		// $this->load->view('admin_login');
    }
    
    public function logout(){

        $this->session->unset_userdata('username');
		$this->session->unset_userdata('teacher');
        $this->session->unset_userdata('teacher_id');
        redirect(base_url());
    
    }
}

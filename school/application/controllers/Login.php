<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        //$this->Login_model->admin_login();
		$this->load->view('admin_login');
    }
    public function login_check()
	{	$username=$this->input->post('username');
		$password=$this->input->post('password');
         $resutl=$this->Login_model->admin_login();
         if($resutl) {
			redirect(base_url().'index.php/class_master');
		} else {
			redirect(base_url());
		}
		
		// $this->load->view('admin_login');
    }
    
    public function logout(){

        $this->session->unset_userdata('username');
        $this->session->set_userdata('name');

        $this->session->unset_userdata('admin_id');
        redirect(base_url());
    
    }
}

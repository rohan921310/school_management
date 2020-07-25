<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	public function admin_login()
	{
        $username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$this->db->select('*');
		$this->db->from('admin_login');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get();
		$login=$query->row();
		//print_r($usr_row); die;
		if($login){
			$this->session->set_userdata('name',$login->name);
			$this->session->set_userdata('username',$login->username);
			$this->session->set_userdata('admin_id',$login->admin_id);
		
			return 1;
		} else {
			return 0;
		}
	}
}

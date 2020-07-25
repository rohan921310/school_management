<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_login_model extends CI_Model {
  
    public function admin_login()
	{
        $username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$this->db->select('*');
		$this->db->from('teacher');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get();
		$login=$query->row();
		
		if($login){
			$this->session->set_userdata('teacher',$login->teacher);
			$this->session->set_userdata('username',$login->username);
			$this->session->set_userdata('teacher_id',$login->teacher_id);
		
			return 1;
		} else {
			return 0;
		}
	}
}


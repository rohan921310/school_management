<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_master extends CI_Controller {

    function __construct()
	{ 
         parent::__construct(); 
		 error_reporting(0);
		
		if($this->session->userdata('username')) { } else {
			redirect(base_url());
		}
    } 
	public function class_master()
	{
        $data['view_class'] = $this->Admin_master->view_class_master();
       
        $this->load->view('include/header');
        $this->load->view('class_master', $data);
        $this->load->view('include/footer');
    
    }
    public function add_class()
	{
        $this->form_validation->set_rules('class', 'Class', 'required');

        if ($this->form_validation->run() ==false){
            $this->load->view('include/header');
            $this->load->view('add_class');
            $this->load->view('include/footer');	
		}else{
			$this->Admin_master->add_Class();
			$this->session->set_flashdata('done', 'Record Added');
			redirect(base_url().'index.php/class_master'); 
		}	
      
    
    }
    public function delete_class_master() {
	    $this->Admin_master->delete_class_master();
		redirect(base_url().'index.php/class_master');
	}

    public function get_class_master() {
        $data['class'] = $this->Admin_master->get_class_master();
        $this->load->view('include/header');
        $this->load->view('edit_class_master', $data);
        $this->load->view('include/footer');	

	}
    public function edit_class_master() {
        $this->Admin_master->edit_class_master();
        
		redirect(base_url().'index.php/class_master');
	}

    
    public function subject_master(){
        $data['view_subject'] = $this->Admin_master->view_subject_master();
        $this->load->view('include/header');
        $this->load->view('subject_master', $data);
        $this->load->view('include/footer');

    }

    public function add_subject()
	{
        $this->form_validation->set_rules('subject', 'Subject', 'required');


		if ($this->form_validation->run() ==false){
            $this->load->view('include/header');
            $this->load->view('add_subject');
            $this->load->view('include/footer');	
		}else{
			$this->Admin_master->add_subject();
			$this->session->set_flashdata('done', 'Record Added');
			redirect(base_url().'index.php/subject_master'); 
		}	
      
    
    }
    public function delete_subject_master() {
	    $this->Admin_master->delete_subject_master();
		redirect(base_url().'index.php/subject_master');
	}

    public function get_subject_master() {
        $data['subject'] = $this->Admin_master->get_subject_master();
        $this->load->view('include/header');
       $this->load->view('edit_subject_master', $data);
        $this->load->view('include/footer');	

	}
    public function edit_subject_master() {
        $this->Admin_master->edit_subject_master();
        
		redirect(base_url().'index.php/subject_master');
	}

    public function teacher_master(){
        $data['view_teacher'] = $this->Admin_master->view_teacher_master();
        $this->load->view('include/header');
        $this->load->view('teacher_master', $data);
        $this->load->view('include/footer');

    }

    public function add_teacher()
	{
        $this->form_validation->set_rules('teacher', 'Teacher', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() ==false){
            $this->load->view('include/header');
            $this->load->view('add_teacher');
            $this->load->view('include/footer');	
		}else{
			$this->Admin_master->add_teacher();
			$this->session->set_flashdata('done', 'Record Added');
			redirect(base_url().'index.php/teacher_master'); 
		}	
      
    
    }
    public function delete_teacher_master() {
	    $this->Admin_master->delete_teacher_master();
		redirect(base_url().'index.php/teacher_master');
	}

    public function get_teacher_master() {
        $data['teacher'] = $this->Admin_master->get_teacher_master();
        $this->load->view('include/header');
       $this->load->view('edit_teacher_master', $data);
        $this->load->view('include/footer');	

	}
    public function edit_teacher_master() {
        $this->Admin_master->edit_teacher_master();
        
		redirect(base_url().'index.php/teacher_master');
	}
    public function assign_master(){
        $data['view_assign'] = $this->Admin_master->view_assign_master();
        $this->load->view('include/header');
        $this->load->view('assign_master', $data);
        $this->load->view('include/footer');

    }


    public function add_assign(){
        $data['fetch_class'] = $this->Admin_master->fetch_class();
        $data['fetch_teacher'] = $this->Admin_master->fetch_teacher();
        $data['fetch_subject'] = $this->Admin_master->fetch_subject();

        $this->form_validation->set_rules('class_id', 'Class', 'required');
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        $this->form_validation->set_rules('teacher_id', 'Teacher', 'required');


        if ($this->form_validation->run() ==false){
           
            $this->load->view('include/header');
            $this->load->view('add_assign', $data);
            $this->load->view('include/footer');
		}else{
			$this->Admin_master->add_assign();
			$this->session->set_flashdata('done', 'Record success');
            redirect(base_url().'index.php/assign_master'); 
		}	
      

    }


    public function delete_assign_master() {
	    $this->Admin_master->delete_assign_master();
		redirect(base_url().'index.php/assign_master');
	}

    public function student_master(){
        $data['view_student'] = $this->Admin_master->view_student_master();
        $this->load->view('include/header');
        $this->load->view('student_master', $data);
        $this->load->view('include/footer');

    }

    public function add_student()
	{
       	
        $this->form_validation->set_rules('class', 'Class', 'required');
        $this->form_validation->set_rules('student', 'Student Name', 'required');
        $this->form_validation->set_rules('dob', 'DOB', 'required');
        
		

	    $data['fetch_class'] = $this->Admin_master->fetch_class();
		if ($this->form_validation->run() ==false){
            $this->load->view('include/header');
		
            $this->load->view('add_student', $data);
            $this->load->view('include/footer');
		}else{
			$this->Admin_master->add_student();
			$this->session->set_flashdata('done', 'Record success');
            redirect(base_url().'index.php/student_master'); 
		}	
	}
    public function delete_student_master() {
	    $this->Admin_master->delete_student_master();
		redirect(base_url().'index.php/student_master');
	}
    public function get_student_master() {
        $data['student'] = $this->Admin_master->get_student_master();
        $data['fetch_class'] = $this->Admin_master->fetch_class();

        $this->load->view('include/header');
       $this->load->view('edit_student_master', $data);
        $this->load->view('include/footer');	

	}
    public function edit_student_master() {
        $this->Admin_master->edit_student_master();
        
		redirect(base_url().'index.php/student_master');
    }

    public function assign_attendance() {
        $data['view_assign_attendance'] = $this->Admin_master->view_assign_attendance();
        $this->load->view('include/header');
        $this->load->view('assign_attendance', $data);
         $this->load->view('include/footer');	
    }


   public function add_assign_attendance() {
    $data['fetch_class'] = $this->Admin_master->fetch_class();
    $data['fetch_teacher'] = $this->Admin_master->fetch_teacher(); 

    $this->form_validation->set_rules('class_id', 'Class', 'required');
    $this->form_validation->set_rules('teacher_id', 'Teacher', 'required');
   

    if ($this->form_validation->run() ==false){
        $this->load->view('include/header');
    
        $this->load->view('add_assign_attendance', $data);
        $this->load->view('include/footer');
    }else{
        $this->Admin_master->add_assign_attendance();
        $this->session->set_flashdata('done', 'Record success');
        redirect(base_url().'index.php/assign_attendance'); 
    }	
    }

    public function delete_assign_attendance() {
	    $this->Admin_master->delete_assign_attendance();
		redirect(base_url().'index.php/assign_attendance');
    }
    
    public function get_assign_attendance() {
        $data['fetch_teacher'] = $this->Admin_master->fetch_teacher(); 

        $data['fetch_class'] = $this->Admin_master->fetch_class();

        $this->load->view('include/header');
       $this->load->view('edit_assign_attendance', $data);
        $this->load->view('include/footer');	

    }
    

    public function edit_assign_attendance() {
        $this->Admin_master->edit_assign_attendance();
       redirect(base_url().'index.php/assign_attendance');
    }
    

    
    function attendance_report(){
        $data['fetch_teacher'] = $this->Admin_master->fetch_teacher(); 
        $data['fetch_class'] = $this->Admin_master->fetch_class();

        $this->load->view('include/header');
        $this->load->view('attendance_report', $data);
         $this->load->view('include/footer');	
        
    }

    function view_attendance(){
        $data['fetch_attendance'] = $this->Admin_master->fetch_attendance();

        $this->load->view('include/header');
        $this->load->view('view_attendance', $data);
         $this->load->view('include/footer');	
        
    }


    public function teacher_report() {
        $data['teacher_report'] = $this->Admin_master->teacher_report();
        $this->load->view('include/header');
        $this->load->view('teacher_report', $data);
         $this->load->view('include/footer');	
    }
    
    public function time_table() {
        $data['fetch_class'] = $this->Admin_master->fetch_class();

        $this->load->view('include/header');
        $this->load->view('time_table', $data);
         $this->load->view('include/footer');	
    }
    public function set_time_table() {
    
        $data['class_id'] = $this->input->post('class_id');
        // $data['class'] = $this->input->post('class');
     
        // $this->load->view('include/header');
        $this->load->view('set_time_table', $data);
        //  $this->load->view('include/footer');	
    }

    public function submit_time_table(){
        $this->Admin_master->submit_time_table();
       redirect(base_url().'index.php/time_table');

    }

}
        


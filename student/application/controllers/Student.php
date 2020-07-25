<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    function __construct()
	{ 
         parent::__construct(); 
		 error_reporting(0);
		
		if($this->session->userdata('username')) { } else {
			redirect(base_url());
		}
    } 
	public function index()
    
	{
        $this->load->view('admin/header');
        $this->load->view('student');
        $this->load->view('admin/footer');
    }
    
    public function upload_assignment()
    {   
		$data['fetch_teacher'] = $this->Student_model->uploading();

        $this->load->view('admin/header');
        $this->load->view('upload_assignment', $data);
        $this->load->view('admin/footer');

    }

    public function select_subject()
    {   
		$data['fetch_subject'] = $this->Student_model->subject_upload();

        $this->load->view('admin/header');
        $this->load->view('select_subject', $data);
        $this->load->view('admin/footer');

    }

    public function upload()
    {   
		
        $data['subject_id'] = $this->input->post('subject_id');
        $data['teacher_id'] = $this->input->post('teacher_id');
    
        $this->load->view('admin/header');
        $this->load->view('upload', $data);
        $this->load->view('admin/footer');

    }

    public function do_upload()
	{
		$config['upload_path']          = './load/uploads/';
		$config['allowed_types']        = 'pdf|docx|xls';
		$config['max_size']             = 2000000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('student_assignment')) {
             $this->session->set_flashdata('error','Uploding Error, Please Try Again'); 
          
             $data['subject_id'] = $this->input->post('subject_id');
             $data['teacher_id'] = $this->input->post('teacher_id');
			 redirect(base_url().'index.php/student');
            
            //  $this->load->view('admin/header');
            //  $this->load->view('upload', $data);
            //  $this->load->view('admin/footer');
		} else {
			$data =  $this->upload->data();
			$student_assignment = $data['raw_name'].$data['file_ext'];

			$post['student_assignment'] = $student_assignment;
			$this->session->set_flashdata('Success','Upload Successful'); 

		    $form_Array = $this->Student_model->insert($student_assignment);
           
            // $this->load->view('admin/header');
            // $this->load->view('upload', $form_Array);
            // $this->load->view('admin/footer');
			redirect(base_url().'index.php/student');
		}
    }
    
    public function download_assignment()
    {   
		$data['fetch_teacher'] = $this->Student_model->uploading();

        $this->load->view('admin/header');
        $this->load->view('download_assignment', $data);
        $this->load->view('admin/footer');

    }

    public function view_subject()
    {   
		$data['fetch_subject'] = $this->Student_model->subject_upload();

        $this->load->view('admin/header');
        $this->load->view('view_subject', $data);
        $this->load->view('admin/footer');

    }

    public function view_student_assignment(){
        $data['result'] = $this->Student_model->fetch_assignment();
        $this->load->view('admin/header');
        $this->load->view('view_assignment', $data);
        $this->load->view('admin/footer');
    }


    public function time_table(){
        $data['result'] = $this->Student_model->time_table();
        $this->load->view('admin/header');
        $this->load->view('time_table', $data);
        $this->load->view('admin/footer');
    }

}

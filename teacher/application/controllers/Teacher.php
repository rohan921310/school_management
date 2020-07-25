<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
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
        $this->load->view('teacher');
        $this->load->view('admin/footer');
    }
    
    public function upload_assignment()
    {   
		$data['fetch_class'] = $this->Teacher_model->uploading();

        $this->load->view('admin/header');
        $this->load->view('upload_assignment', $data);
        $this->load->view('admin/footer');

    }

    public function select_subject()
    {   
		$data['fetch_subject'] = $this->Teacher_model->subject_upload();

        $this->load->view('admin/header');
        $this->load->view('select_subject', $data);
        $this->load->view('admin/footer');

    }

    public function upload()
    {   
		
        $data['subject_id'] = $this->input->post('subject_id');
		$data['class_id'] = $this->input->post('class_id');
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

		if (!$this->upload->do_upload('teacher_assignment')) {
             $this->session->set_flashdata('error','Uploding Error, Please Try Again'); 
			return redirect(base_url().'index.php/teacher');
		} else {
			$data =  $this->upload->data();
			$teacher_assignment = $data['raw_name'].$data['file_ext'];

			$post['teacher_assignment'] = $teacher_assignment;
			$this->session->set_flashdata('Success','Upload Successful'); 

			$this->Teacher_model->insert($teacher_assignment);

			return redirect(base_url().'index.php/teacher');
		}
	}
     
    public function download_assignment()
    {   
		$data['fetch_class'] = $this->Teacher_model->uploading();

        $this->load->view('admin/header');
        $this->load->view('download_assignment', $data);
        $this->load->view('admin/footer');

    }

    public function view_subject()
    {   
		$data['fetch_subject'] = $this->Teacher_model->subject_upload();

        $this->load->view('admin/header');
        $this->load->view('view_subject', $data);
        $this->load->view('admin/footer');

    }

    public function view_student_assignment(){
        $data['result'] = $this->Teacher_model->fetch_assignment();
        $this->load->view('admin/header');
        $this->load->view('view_assignment', $data);
        $this->load->view('admin/footer');
    }

    public function attendance(){

		$data['fetch_class'] = $this->Teacher_model->class_attendance();

        $this->load->view('admin/header');
         $this->load->view('attendance', $data);
        $this->load->view('admin/footer');

    }
    public function take_attendance(){

		$data['classs'] = $this->Teacher_model->attendance();
		
        $this->load->view('admin/header');
         $this->load->view('take_attendance', $data);
        $this->load->view('admin/footer');

    }

    public function submit_attendance(){
		$classs = $this->Teacher_model->attendance();
        // print_r($classs);
        // die;
			foreach ($classs as $student) {
                $student_id= $student['student_id'];
				$class_id= $student['class_id'];
                
                $teacher_id = $this->session->userdata('teacher_id'); 

				$attendance = $this->input->post($student_id);
				$date = date('d-m-y');
				$this->Teacher_model->submit_attendance($student_id,$teacher_id,$class_id,$attendance,$date);
				
			}
        // $this->Teacher_model->submit_attendance();
         
        return redirect(base_url().'index.php/attendance');

    }

    public function work_done(){

        $this->load->view('admin/header');
         $this->load->view('work_done');
        $this->load->view('admin/footer');

    }

    public function work_submit(){
        $this->Teacher_model->work_done();
	    $this->session->set_flashdata('Success','Submitted'); 

        return redirect(base_url().'index.php/work_done');


    }

    public function time_table(){
        $data['result'] = $this->Teacher_model->time_table($class_id);

        $this->load->view('admin/header');
         $this->load->view('time_table', $data);
        $this->load->view('admin/footer');

    }
}

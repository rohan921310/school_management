<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teacher_model extends CI_Model
{
    public function uploading()
	{
		$teacher_id = $this->session->userdata('teacher_id'); 
	
        $this->db->select('assign.*,class.class,class.class_id');
    	$this->db->from('assign');
		$this->db->where('assign.teacher_id', $teacher_id);
        $this->db->join('class','class.class_id  =assign.class_id','left');
        return  $this->db->get()->result_array();
    }
    
    public function subject_upload()
	{
        $teacher_id = $this->session->userdata('teacher_id'); 
		$class_id = $this->input->post('class_id');
        
	
        $this->db->select('assign.*,subject.subject,subject.subject_id');
    	$this->db->from('assign');
        $this->db->where('assign.teacher_id', $teacher_id);
		$this->db->where('assign.class_id', $class_id);
        
        $this->db->join('subject','subject.subject_id  =assign.subject_id','left');
        return  $this->db->get()->result_array();
    }
    
    function insert($teacher_assignment)
	{
		$teacher_id = $this->session->userdata('teacher_id'); 

		extract($this->input->post());
		$formArray = array(
			'teacher_assignment' => $teacher_assignment,
			'class_id' => $class_id,
			'subject_id' => $subject_id,
			'teacher_id' => $teacher_id,
			'remark'  => $remark
		);
		
		$this->db->insert('teacher_assignment', $formArray);

    }
    
    function fetch_assignment(){
		$teacher_id = $this->session->userdata('teacher_id'); 
		$subject_id = $this->input->post('subject_id');
		$class_id = $this->input->post('class_id');
        
        $this->db->select('*');
    	$this->db->from('student_assignment');
        $this->db->where('student_assignment.teacher_id', $teacher_id);
		$this->db->where('student_assignment.class_id', $class_id);
		$this->db->where('student_assignment.subject_id', $subject_id);
        
        $this->db->join('subject','subject.subject_id  =student_assignment.subject_id','left');
        $this->db->join('class','class.class_id  =student_assignment.class_id','left');
        $this->db->join('teacher','teacher.teacher_id  =student_assignment.teacher_id','left');

        return  $this->db->get()->result_array();
	}
	
	function class_attendance(){
		$teacher_id = $this->session->userdata('teacher_id'); 
	
        $this->db->select('assign_attendance.*,class.class,class.class_id');
    	$this->db->from('assign_attendance');
		$this->db->where('assign_attendance.teacher_id', $teacher_id);
        $this->db->join('class','class.class_id  =assign_attendance.class_id','left');
        return  $this->db->get()->result_array();

	}

	function attendance(){
		// $teacher_id = $this->session->userdata('teacher_id'); 

		$class_id = $this->input->post('class_id');
		
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where('student.class_id', $class_id);
		
        $this->db->join('class','class.class_id  = student.class_id','left');
		$result =  $this->db->get()->result_array();
		return $result;
		// echo "<pre>";
		// print_r($result);
		// die;
	}

	function submit_attendance($student_id,$teacher_id,$class_id,$attendance){
		// $class_id = $this->input->post('class_id');
		// $student_id = $this->input->post('student_id');
		// $teacher_id = $this->session->userdata('teacher_id'); 
		// extract($this->input->post());
		$formArray = array(
			'date'	=> date('y-m-d'),
			'teacher_id' => $teacher_id,
			'student_id' => $student_id,
			'class_id' => $class_id,
			
			
			'attendance' => $attendance
		);
		// echo'<pre>';
		// print_r($formArray);
		// die;
			$this->db->insert('all_attendance', $formArray);
	}
	function work_done(){
		$teacher_id = $this->session->userdata('teacher_id'); 
		extract($this->input->post());
		$formArray = array(
			'date'	=> date('y-m-d'),
			'teacher_id' => $teacher_id,
			'work_done' => $work_done
		);
		$this->db->insert('work_done', $formArray);

	}

	function time_table(){
		$class_id = $this->session->userdata('class_id'); 
		$this->db->select('*');
    	$this->db->from('time_table');
		$this->db->where('time_table.class_id', $class_id);

        $this->db->join('class','class.class_id  =time_table.class_id','left');

        return  $this->db->get()->result_array();
		
	}
}
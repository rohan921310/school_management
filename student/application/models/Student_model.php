<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{
    public function uploading()
	{
		$class_id = $this->session->userdata('class_id'); 
	
        $this->db->select('assign.*,teacher.teacher,teacher.teacher_id');
    	$this->db->from('assign');
		$this->db->where('assign.class_id', $class_id);
        $this->db->join('teacher','teacher.teacher_id  =assign.teacher_id','left');
        return  $this->db->get()->result_array();
    }
    
    public function subject_upload()
	{
        $class_id = $this->session->userdata('class_id'); 
		$teacher_id = $this->input->post('teacher_id');
        
	
        $this->db->select('assign.*,subject.subject,subject.subject_id');
    	$this->db->from('assign');
        $this->db->where('assign.teacher_id', $teacher_id);
		$this->db->where('assign.class_id', $class_id);
        
        $this->db->join('subject','subject.subject_id  =assign.subject_id','left');
        return  $this->db->get()->result_array();
    }
    
    function insert($student_assignment)
	{
		$class_id = $this->session->userdata('class_id'); 
		$name = $this->session->userdata('student'); 
		$roll = $this->session->userdata('roll'); 

		// $teacher_id = $this->input->post('teacher_id');

		extract($this->input->post());
		$formArray = array(
			'student_assignment' => $student_assignment,
			'class_id' => $class_id,
			
			'subject_id' => $subject_id,
			'teacher_id' => $teacher_id,
			'roll'  => $roll,
			'name' => $name
		);
		
	$this->db->insert('student_assignment', $formArray);
return $formArray;
	}


function fetch_assignment(){
		$class_id = $this->session->userdata('class_id'); 
		$subject_id = $this->input->post('subject_id');
		$teacher_id = $this->input->post('teacher_id');
        
        $this->db->select('*');
    	$this->db->from('teacher_assignment');
        $this->db->where('teacher_assignment.teacher_id', $teacher_id);
		$this->db->where('teacher_assignment.class_id', $class_id);
		$this->db->where('teacher_assignment.subject_id', $subject_id);
        
        $this->db->join('subject','subject.subject_id  =teacher_assignment.subject_id','left');
        $this->db->join('class','class.class_id  =teacher_assignment.class_id','left');
        $this->db->join('teacher','teacher.teacher_id  =teacher_assignment.teacher_id','left');

        return  $this->db->get()->result_array();
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
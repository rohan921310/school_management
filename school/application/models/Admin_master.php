<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_master extends CI_Model {


    public function view_class_master() {
		$this->db->select('*');
		$this->db->from('class');
        $query=$this->db->get();
	    return $query->result();
	}

    public function add_class()
	{ 
        
		extract($this->input->post());
		$formArray = array(
                        'class' => $class,
							          'remark' => $remark,
                       );
                           
		$this->db->insert('class', $formArray);
    }

    public function delete_class_master() {
		$class_id=$this->input->get('clas	s_id');
		$this->db->where('class_id',$class_id);
		$this->db->delete('class');
		
    }
    
    public function get_class_master() {
        $class_id=$this->input->get('class_id');
     
        $this->db->from('class');
        $this->db->where('class_id',$class_id);
        $query=$this->db->get()->row_array();
       
		return $query;
    }
    
    function edit_class_master(){
        
        $class_id=$this->input->get('class_id');
        extract($this->input->post());
        $this->db->where('class_id', $class_id);
		$formArray = array(
                            'class' => $class,
                            'remark' => $remark,
                            'username' => $username,
                            'password' => $password
                            );
		return $result = $this->db->update('class', $formArray);
	}



    public function view_subject_master() {
		$this->db->select('*');
		$this->db->from('subject');
		$query=$this->db->get();
	    return $query->result();
	}

    public function add_subject()
	{ 
        
		extract($this->input->post());
		$formArray = array(
                                'subject' => $subject,
                                'remark' => $remark
                              );
                           
		$this->db->insert('subject', $formArray);
    }
    public function delete_subject_master() {
		$subject_id=$this->input->get('subject_id');
		$this->db->where('subject_id',$subject_id);
		$this->db->delete('subject');
		
	}

    public function get_subject_master() {
        $subject_id=$this->input->get('subject_id');
     
        $this->db->from('subject');
        $this->db->where('subject_id',$subject_id);
        $query=$this->db->get()->row_array();
       
		return $query;
    }
    
    function edit_subject_master(){
        
        $subject_id=$this->input->get('subject_id');
        extract($this->input->post());
        $this->db->where('subject_id', $subject_id);
		$formArray = array(
                            'subject' => $subject,
                            'remark' => $remark
                            );
		return $result = $this->db->update('subject', $formArray);
	}

    public function view_teacher_master() {
		$this->db->select('*');
		$this->db->from('teacher');
		$query=$this->db->get();
	    return $query->result();
	}

    public function add_teacher()
	{ 
        
		extract($this->input->post());
		$formArray = array(
                            'teacher' => $teacher,
                            'email' => $email,
                            'mobile' => $mobile,
                            'address' => $address,
                            'username'	=> $username,
                            'password' => $password
                              );
                           
		$this->db->insert('teacher', $formArray);
    }



    public function delete_teacher_master() {
		$teacherid=$this->input->get('teacher_id');
		$this->db->where('teacher_id',$teacherid);
		$this->db->delete('teacher');
		
    }
    
    public function get_teacher_master() {
        $teacher_id=$this->input->get('teacher_id');
     
        $this->db->from('teacher');
        $this->db->where('teacher_id',$teacher_id);
        $query=$this->db->get()->row_array();
       
		return $query;
    }
    
    function edit_teacher_master(){
        
        $teacher_id=$this->input->get('teacher_id');
        extract($this->input->post());
        $this->db->where('teacher_id', $teacher_id);
		$formArray = array(
            'teacher' => $teacher,
            'email' => $email,
            'mobile' => $mobile,
            'address' => $address,
            'username'	=> $username,
            'password' => $password
                            );
		return $result = $this->db->update('teacher', $formArray);
	}
    public function view_student_master() {
        $this->db->select('student.*,class.class');
        // $this->db->select('*');
        $this->db->from('student');
        $this->db->join('class','class.class_id  = student.class_id','left');
        
        $query=$this->db->get();
	    return $query->result();
	}

    public function add_student()
	{ 
        
		extract($this->input->post());
		$formArray = array(
                            'student' => $student,
                            'class_id' => $class,
                            'dob' => $dob,
                            'username'	=> $username,
                            'password' => $password,
                            'roll' => $roll
                              );
                           
		$this->db->insert('student', $formArray);
    }
    public function delete_student_master() {
		$student_id=$this->input->get('student_id');
		$this->db->where('student_id',$student_id);
		$this->db->delete('student');
		
    }
    public function get_student_master() {
        $student_id=$this->input->get('student_id');
     
        $this->db->from('student');
        $this->db->where('student_id',$student_id);
        $query=$this->db->get()->row_array();
       
		return $query;
    }
    
    function edit_student_master(){
        
        $student_id=$this->input->get('student_id');
        extract($this->input->post());
        $this->db->where('student_id', $student_id);
		$formArray = array(
            'student' => $student,
            'class_id' => $class,
            'dob' => $dob,
            'username'	=> $username,
            'password' => $password,
            'roll' => $roll
                            );
		return $result = $this->db->update('student', $formArray);
	}

    function fetch_class(){
           $this->db->order_by('class', 'ASC');
           $querry1 = $this->db->get('class')->result_array();
        //    echo "<pre>";
        //      print_r($querry1);
        //     echo "</pre>";
        //     exit();
           return $querry1;
   
   
       }
       function fetch_teacher(){
        $this->db->order_by('teacher', 'ASC');
        $querry2 = $this->db->get('teacher')->result_array();
     //    echo "<pre>";
     //      print_r($querry1);
     //     echo "</pre>";
     //     exit();
        return $querry2;


    }
    function fetch_subject(){
        $this->db->order_by('subject', 'ASC');
        $querry3 = $this->db->get('subject')->result_array();
     //    echo "<pre>";
     //      print_r($querry1);
     //     echo "</pre>";
     //     exit();
        return $querry3;


    }


    public function add_assign()
	{ 
        
		extract($this->input->post());
		$formArray = array(
                            'subject_id' => $subject_id,
                            'class_id' => $class_id,
                            'teacher_id' => $teacher_id
                              );
                           
		$this->db->insert('assign', $formArray);
    }

    public function view_assign_master() {
        $this->db->select('assign.*,subject.subject,teacher.teacher,class.class');
        $this->db->from('assign');
        $this->db->join('class','class.class_id  = assign.class_id','left');
        $this->db->join('subject','subject.subject_id  = assign.subject_id','left');
        $this->db->join('teacher','teacher.teacher_id  = assign.teacher_id','left');
        
        $query=$this->db->get();
	    return $query->result();
    }
    
    public function delete_assign_master() {
		$assign_id=$this->input->get('assign_id');
		$this->db->where('assign_id',$assign_id);
		$this->db->delete('assign');
		
  }
  
  public function add_assign_attendance()
	{ 
        
		extract($this->input->post());
		$formArray = array(
                            'class_id' => $class_id,
                            'teacher_id' => $teacher_id
                              );
                           
		$this->db->insert('assign_attendance', $formArray);
    }

    public function view_assign_attendance() {
      $this->db->select('assign_attendance.*,teacher.teacher,class.class');
      $this->db->from('assign_attendance');
      $this->db->join('class','class.class_id  = assign_attendance.class_id','left');
      $this->db->join('teacher','teacher.teacher_id  = assign_attendance.teacher_id','left');
      
      $query=$this->db->get();
    return $query->result();
  }
  
  public function delete_assign_attendance() {
		$attendance_id=$this->input->get('attendance_id');
		$this->db->where('attendance_id',$attendance_id);
		$this->db->delete('assign_attendance');
		
  }
  public function get_assign_attendance() {
    $attendance_id=$this->input->get('attendance_id');
 
    $this->db->from('assign_attendance');
    $this->db->where('attendance_id',$attendance_id);
    $query=$this->db->get()->row_array();
   
return $query;
}



function fetch_attendance(){
  $teacher_id=$this->input->post('teacher_id');
  $class_id=$this->input->post('class_id');

  $this->db->select('*');
  $this->db->from('all_attendance');
  // $this->db->where('class_id',$class_id);
  // $this->db->where('teacher_id',$teacher_id);
  $this->db->where('all_attendance.teacher_id', $teacher_id);
  $this->db->where('all_attendance.class_id', $class_id);
  $this->db->join('student','student.student_id  = all_attendance.student_id','left');

  $this->db->join('class','class.class_id  = all_attendance.class_id','left');
  $this->db->join('teacher','teacher.teacher_id  = all_attendance.teacher_id','left');

  $query=$this->db->get();
return $query->result();
}

function edit_assign_attendance(){
    
    $attendance_id=$this->input->get('attendance_id');
    extract($this->input->post());
    $this->db->where('attendance_id', $attendance_id);
$formArray = array(
       
        'class_id' => $class,
        'teacher_id' => $teacher,
                   );
     $this->db->update('assign_attendance', $formArray);
}

function teacher_report(){

  $this->db->select('*');
  $this->db->from('work_done');
 
  $this->db->join('teacher','teacher.teacher_id  = work_done.teacher_id','left');
  
  $query=$this->db->get();
return $query->result();
}

function submit_time_table(){

  extract($this->input->post());
  $formArray = array(
       
    'class_id' => $class_id,
    'time_table' => $rohan,
               );
          
 $this->db->insert('time_table', $formArray);

}

}
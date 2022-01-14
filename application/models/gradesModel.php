<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gradesModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

    public function createData($id)
    {
        /*
        if($this->input->post('semester') == 1) {
            $data = array (
                'teacherID' => $id,
                'studentID' => $this->input->post('studentID'),
                'subjectID' => $this->input->post('subjectID'),
                'first_sem' => $this->input->post('grade'),
                'status' => 1
            );
            
            $this->db->insert('grades_table',$data);
        } 

        elseif ($this->input->post('semester') == 2) {
            $data = array (
                'second_sem' => $this->input->post('grade')
            );
            $this->db->where('studentID',$this->input->post('studentID'));
            $this->db->where('subjectID',$this->input->post('subjectID'));
            $this->db->update('grades_table',$data);
        } 

        elseif ($this->input->post('semester') == 3) {
            $data = array (
                'third_sem' => $this->input->post('grade')
            );
            $this->db->where('studentID',$this->input->post('studentID'));
            $this->db->where('subjectID',$this->input->post('subjectID'));
            $this->db->update('grades_table',$data);
        }*/
        $data = array (
            'teacherID' => $id,
            'studentID' => $this->input->post('studentID'),
            'subjectID' => $this->input->post('subjectID'),
            'grade' => $this->input->post('grade'),
            'rating' => $this->input->post('rating'),
            'status' => 1
        );
        $this->db->insert('grades_table',$data);
        
    }
    public function getGradesData($id)
    {
        $query = $this->db->query('SELECT * FROM grades_table WHERE grades_table.teacherID = '.$id);
        return $query->result();
    }

    public function getClassData($id)
    {
        $query = $this->db->query('SELECT * FROM class WHERE class.teacherID = '.$id);
        return $query->result();
    }

    public function getStudentData($id)
    {
        $query = $this->db->query('SELECT * FROM student_accounts
                                    LEFT JOIN applicant_accounts 
                                    ON student_accounts.studentID=applicant_accounts.studentID
                                    WHERE student_accounts.studentID='.$id);
        return $query->result();
    }

    public function getTeacherGrades($id)
    {
        $query = $this->db->query("SELECT * FROM grades_table
                                    LEFT JOIN subjects_table 
                                    ON grades_table.subjectID=subjects_table.subjectID
                                    WHERE grades_table.teacherID=" . $id);
        return $query->result();
    }
    public function getStudentGrades($id)
    {
        $query = $this->db->query("SELECT * FROM grades_table
                                    LEFT JOIN subjects_table 
                                    ON grades_table.subjectID=subjects_table.subjectID
                                    WHERE grades_table.studentID=" . $id);
        return $query->result();

    }
    public function deactivateData($id){
		$data = array(
			'status' => 0
		);
		$this->db->where('gradeID',$id);
		$this->db->update('grades_table',$data);
	}
    public function activateData($id){
		$data = array(
			'status' => 1
		);
		$this->db->where('gradeID',$id);
		$this->db->update('grades_table',$data);
	}
    
    
    
}

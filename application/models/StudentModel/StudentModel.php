<?php
class StudentModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	//MethodForCreatingStudent//
	public function createStudent($dataArray)
	{
	$this->db->insert('students',$dataArray);
	return $id=$this->db->insert_id();
	}

	//ListingStudentRecored//

	public function getAllStudent()
	{
		$query=$this->db->get("students");
		//print_r($query->result_array());
		return $query->result_array();	
	}

	//Get The Single Row of Recored Latest One : Last //
	public function getStudentRow($id)
	{
		$this->db->where('student_id',$id);
		$row=$this->db->get("students")->row_array();
		return $row;
	}

	//Update Model

	public function updateStudentModel($id,$formarray)
	{
		$this->db->where('student_id',$id);
		$this->db->update('students',$formarray);
		return $id;
	}


	//DeleteStudent

	function deleteStudentModel($id)
	{
		$this->db->where('student_id',$id);
		$this->db->delete('students');
		return $id;
	}
	

}



?>

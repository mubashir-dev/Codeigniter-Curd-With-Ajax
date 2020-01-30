<?php
class StudentController extends CI_Controller
{
public function __construct()
{
	parent::__construct();
	$this->load->model('StudentModel/StudentModel');
}
//This Method Will Show Student List//
public function index()
{
	$list=$this->StudentModel->getAllStudent();
	$data['rows']=$list;
	$this->load->view('Student/list',$data);
}

public function showCreateForm()
{
	$html=$this->load->view('Student/Create','',true);
	$response['html']=$html;
	echo json_encode($response);
}

public function saveStudentModel()
{
$this->form_validation->set_rules('name','Name','required');
$this->form_validation->set_rules('father_name','Father Name','required');
$this->form_validation->set_rules('email','Email','required');
$this->form_validation->set_rules('address','Address','required');

if($this->form_validation->run() == true)
{
$form_array=array();
$form_array['student_name']=$this->input->post('name');
$form_array['father_name']=$this->input->post('father_name');	
$form_array['email']=$this->input->post('email');	
$form_array['address']=$this->input->post('address');	

$id=$this->StudentModel->createStudent($form_array) ;
//Get The Single Row of Data
$row=$this->StudentModel->getStudentRow($id);
$data['row']=$row;
$rowhtml=$this->load->view('Student/Student_row',$data,true);
$response['row']=$rowhtml;
$response['status']=1;
$response['message']="<div class='alert alert-success'>Data Successfully Inserted</div>";
}
else
{
$response['status']=0;
$response['name']=strip_tags(form_error('name'));
$response['father_name']=strip_tags(form_error('father_name'));
$response['email']=strip_tags(form_error('email'));
$response['address']=strip_tags(form_error('address'));
}
 echo json_encode($response);
}


//Update Form 
public function getStudentForm($id)
{	$row=$this->StudentModel->getStudentRow($id);
	$data['row']=$row;
	$html=$this->load->view('Student/Edit',$data,true);
	$response['html']=$html;
	echo json_encode($response);
}

//UpdateModel
public function updateStudentModel()
{

$this->form_validation->set_rules('name','Name','required');
$this->form_validation->set_rules('father_name','Father Name','required');
$this->form_validation->set_rules('email','Email','required');
$this->form_validation->set_rules('address','Address','required');

if($this->form_validation->run() == true)
{
$form_array=array();
$form_array['student_name']=$this->input->post('name');
$form_array['father_name']=$this->input->post('father_name');	
$form_array['email']=$this->input->post('email');	
$form_array['address']=$this->input->post('address');	

$id=$this->StudentModel->updateStudentModel($this->input->post('id'),$form_array) ;
//Get The Single Row of Data
$row=$this->StudentModel->getStudentRow($id);
$response['row']=$row;
$response['status']=1;
$response['message']="<div class='alert alert-success'>Data Successfully Updated</div>";
}
else
{
$response['status']=0;
$response['name']=strip_tags(form_error('name'));
$response['father_name']=strip_tags(form_error('father_name'));
$response['email']=strip_tags(form_error('email'));
$response['address']=strip_tags(form_error('address'));
}
 echo json_encode($response);

}
//Delete Controller Method


function deleteStudent($id)
{
$this->StudentModel->deleteStudentModel($id);
$response['status']=1;
$response['message']="Recored Successfully Deleted";

echo json_encode($response);

}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$data['content'] = $this->load->view('dashboard', '', true);
		$this->load->view('template',$data);
	}
	
	public function dashboard()
	{
		$data['content'] = $this->load->view('dashboard', '', true);
		$this->load->view('template',$data);
	}


	public function user()
	{
		$this->form_validation->set_rules("username","User name","trim|required");
		$this->form_validation->set_rules("cnic","cnic","trim|required");
		
		
		if ($this->form_validation->run() == FALSE)
                {
					$data['content'] = $this->load->view('user/addtest', '', true);
					$this->load->view('template',$data);
                }
                else
                {


					$this->load->model("Student_model","std");
					$this->std->addStudent();

				redirect("userlist");
					echo "validated";
                }
		
	}
	public function userlist(){

		$this->load->model("Student_model","std");
		$list['studentlist'] =	$this->std->getStudentList();

	$data['content'] = $this->load->view('user/list', $list,true); // false , firect load on browser
	// true , let me save it in a variable
	$this->load->view('template',$data);
	}




	public function getstudentlist(){
		$query = $this->db->query("SELECT * FROM student;");
		//var_dump($query->result());
		
		//var_dump($query->row());
		
		// var_dump($query->result_array());
		//var_dump($query->row());

		//var_dump($query->row_array());
// $res = $query->list_fields();
// var_dump($res);
// $query = $this->db->select('title')
//                 ->where('id', $id)
//                 ->limit(10, 20)
//                 ->get('mytable');
// $row = $query->row_array(4);
// var_dump($row);
// 		foreach ($query->result() as $row)
// 		{
// 			var_dump($row);
			
// 				// echo $row->username;
// 				// echo $row->cnic;
// 				// echo $row->image;
// 		}


	}

}

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

				
					echo "validated";
                }
		
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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

public function adduser(){

	$this->form_validation->set_rules("username","User name","required");
	$this->form_validation->set_rules("password","Password","required");
	$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
	
	if ($this->form_validation->run() == FALSE)
{
	$data['content'] = $this->load->view('user/addtest', '', true);
	$this->load->view('template',$data);
}

else{
	echo "validated successfully";
}

}
public function success(){
//
}
public function verifyusername(){

	if($this->input->post['username'] !='')
		return true;
	else 
	{
	$this->form_validation->set_message('verifyusername', 'Please enter username');
	return false;
	}
}

	public function user()
	{
		$this->form_validation->set_rules("username","User name","trim|callback_verifyusername");
		$this->form_validation->set_rules("password","Password","trim|required");
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if ($this->form_validation->run() == FALSE)
                {
					$data['content'] = $this->load->view('user/addtest', '', true);
					$this->load->view('template',$data);
                }
                else
                {
				//	echo "Successfully validated";
					//redirect('success');
				// 	$data['content'] = $this->load->view('user/addtest', '', true);
				// 	$this->load->view('template',$data);
				// 
			
                      //  $this->load->view('formsuccess');
                }
		
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {



    function index()
    {
        $this->load->view('login');
    }


    function validate_login()
    {
        $this->load->model('login_model');

        $result = $this->login_model->validatelogin();
        
                
        if ($result->num_rows() > 0) {
        $admindata  = $result->row_array();

        //var_dump($admindata);


        $this->session->set_userdata('username', $admindata['username']);
        $this->session->set_userdata('email', $admindata['email']);
        $this->session->set_userdata('password', $admindata['password']);


        echo $this->session->userdata('username');
        echo $this->session->userdata('email');
        echo $this->session->userdata('password');
        }
            else echo "not";
            
              redirect("admin");
    }



        function logout(){

        $this->session->session_destroy();
        }

}


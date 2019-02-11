<?php if (!defined('BASEPATH'))   exit('No direct script access allowed');

class Student_model extends CI_Model
{

    public function addStudent(){
        
        var_dump($_FILES);

					

        $data['username']= $this->input->post('username');
        $data['cnic']=  $this->input->post('cnic');
        $data['image']=  $data['cnic'].$_FILES['userfile']['name'];

        move_uploaded_file($_FILES['userfile']['tmp_name'],"uploads/student/".$data['cnic'].$_FILES['userfile']['name']);
        

        $this->db->insert("student",$data);



        echo "Model called";
    }

}
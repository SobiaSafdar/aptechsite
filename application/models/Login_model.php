<?php if (!defined('BASEPATH'))   exit('No direct script access allowed');

class Login_model extends CI_Model
{

    function validatelogin(){
        $data['username'] = $this->input->post("username");
        $data['password'] = $this->input->post("password");
    
return    $this->db->get_where("admin",$data);



//var_dump($result);


}
}
?>
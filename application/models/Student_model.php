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
        $str = $this->db->last_query();

        if($this->db->insert_id())
return true;
else return false;


        echo "Model called";
    }

    public function getStudentList(){


        $listoffields =  $this->db->list_fields("student");
var_dump($listoffields);


        $this->db->select("id");
        
       // $this->db->where("id",1);

        $where = ["id"=>1];
       $result =  $this->db->get_where("student", $where); //SELECT * FROM `student`


      // $allrowsresult = $result->result_array(); // all records in array
    //    $singlerowarray = $result->row_array(); // single object
      
      
    return    $allrowsobject = $result->result();
    //    $singlerowobject = $result->row(); // single object
       
      //  var_dump($allrowsresult);
    //    var_dump($allrowsobject);

    //    var_dump($singlerowobject);
    //    var_dump($singlerowarray);

    //    foreach($allrowsresult as $row)
    //    {
    //       echo  $row['username']."<br>";
    //    }
    }

}
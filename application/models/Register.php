<?php

class Register extends CI_Model{

	public function __construct(){
		$this->load->database();
	}


public function new_user($data,$mobile){

$query=$this->db->get_where('users',array('mobile'=>$mobile));

if ($query->num_rows() >0){
return true;
}  
else{

if($this->db->insert('users',$data)){

$query=$this->db->get_where('users',array('mobile'=>$mobile));
$result['userdata']=$query->row_array();


	}	

}


return $result;	

}

}

?>
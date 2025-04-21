<?php
class Login extends CI_Model{

public function __construct(){
  $this->load->database();
}


public function login_user($mobile,$password){

	
    $query=$this->db->get_where('users', array('mobile'=>$mobile,'password'=>$password));
	$result1=$query->row_array();
    
    $result['userdata']=$result1;



return $result;



}
}

 ?>

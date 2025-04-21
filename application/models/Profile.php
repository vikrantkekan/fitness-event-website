
<?php
class Profile extends CI_Model{

public function __construct(){
  $this->load->database();
}


 public function update($data,$mob) { 

   $this->db->set($data); 
   $this->db->where("mobile",$mob); 

   if ($this->db->update("users", $data)) { 
      return true; 
   } 

}


}

 ?>

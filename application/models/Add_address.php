
<?php
class Add_address extends CI_Model{

public function __construct(){
  $this->load->database();
}


public function insert($data) { 

    if ($this->db->insert("address", $data)) { 
       return true; 
    } 

 }


 public function update($data,$add_id) { 

   $this->db->set($data); 
$this->db->where("id",$add_id); 

   if ($this->db->update("address", $data)) { 
      return true; 
   } 

}


}

 ?>

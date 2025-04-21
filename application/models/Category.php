<?php
class category extends CI_Model{

public function __construct(){
  $this->load->database();
}


public function retrive_cat($id){



$this->db->select('name');
$query = $this->db->get_where("main_cat",array('mainid'=>$id)); 
foreach ($query->result() as $row)
{
     

        $data[]=array('id'=>$id,'name'=>$row->name);   
     
}
return $data;


}




}

 ?>


<?php
class Address extends CI_Model{

public function __construct(){
  $this->load->database();
}


public function fetch_address($uid){

    $data=array();
$query = $this->db->get_where("address",array('uid'=>$uid)); 
//if($query->num_rows>0){
foreach ($query->result() as $row)
{
    $data[]=array('id'=> $row->id,'pin'=> $row->pin,'house'=> $row->house,'road'=> $row->road,'city'=> $row->city,
    'state'=> $row->state,'landmark'=> $row->landmark,'name'=> $row->name,'mobile'=> $row->mobile,'altmobile'=> $row->altmobile,'type'=> $row->type);   
        
}

return $data;

/*
}else{
  return array();
}
*/
}


}

 ?>

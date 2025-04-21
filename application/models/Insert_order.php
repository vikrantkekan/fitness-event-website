
<?php
class Insert_order extends CI_Model{

public function __construct(){
  $this->load->database();
}


public function place_order($data) { 

    if ($this->db->insert("order_list", $data)) { 

        $insert_id = $this->db->insert_id();

       return $insert_id; 
    } 

 }

 public function insert_item($data) { 

    if ($this->db->insert("order_item", $data)) { 
        
      $insert_id = $this->db->insert_id();

       return $insert_id;
    } 

 }


  public function update_order($data,$merch_id) { 

      $this->db->set($data); 
   $this->db->where("merch_id",$merch_id); 

   if ($this->db->update("order_list", $data)) { 
      return true; 
   } 

 }

   public function update_order_item($data,$merch_id) { 

      $this->db->set($data); 
   $this->db->where("merch_id",$merch_id); 

   if ($this->db->update("order_item", $data)) { 
      return true; 
   }

 }

   public function check_merch_id($merch_id) { 

$data[0]=array(0);

$query2=$this->db->get_where('order_list', array('merch_id'=>$merch_id));

if($query2->num_rows()>0){
    $data[0]=array(1);

 }
return $data;

}

}
 ?>

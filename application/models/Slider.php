<?php
class Slider extends CI_Model{

public function __construct(){
  $this->load->database();
}


public function fetch_slider(){

    /*
    $query=$this->db->get_where('mid_cat', array('status'=>0));
	$result=$query->row_array();
*/


$query = $this->db->get("slider"); 
foreach ($query->result() as $row)
{
 
 $slider[]=array('image'=>$row->slider);   
     
}

$query = $this->db->get("slider3"); 
foreach ($query->result() as $row)
{
 
 $slider2[]=array('image'=>$row->image);   
     
}

$data=array('slider_main'=> $slider,'slider_sec'=> $slider2);

return $data;


}




}

 ?>

<?php 
class Review extends CI_Model{

public function __construct(){
	$this->load->database();
}


public function add_review($data){

	if($this->db->insert('reviews',$data)){
return true;
	}
	else{
		return false;
	}

}



public function all_reviews(){
	$query=$this->db->get_where('reviews',array('status'=>1));


foreach($query->result() as $row){
	$data[]=array('id'=>$row->id,'name'=>$row->name,'subject'=>$row->subject,'comment'=>$row->comment,'todate'=>$row->todate);
}

$result['reviews']=$data;

	return $data;
}


}

 ?>
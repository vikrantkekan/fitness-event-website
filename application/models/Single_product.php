<?php
class Single_product extends CI_Model{

public function __construct(){
  $this->load->database();
}


public function retrive_product($para){

	$url='';
	
$query=$this->db->get_where('products', array('id'=>$para));
	$result=$query->row_array();
	$mainid=$result['mainid'];


	if($mainid==1){
		$result['maincat']='Car Air Purifier';
	}else{
		$result['maincat']='Home Air Purifier';
	}

	

	$this->db->select('id, pname, mrp,oprice,del_charges,short_desc,details,f_img');
	$query4=$this->db->get_where('products', array('id'=>$para));
	foreach ($query4->result() as $row2)
	{
			$fimg1=$row2->f_img;
				
	
	$data2[]=array('pid'=>$row2->id,'pname'=>$row2->pname,'mrp'=>$row2->mrp,'price'=>$row2->oprice,'del_charges'=>$row2->del_charges,'short_desc'=>$row2->short_desc,'details'=>$row2->details,'img'=>$fimg1);
	}
	
	$result['related']=$data2;

return $result;



}
}

 ?>

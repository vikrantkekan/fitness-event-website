<?php 

class Promo extends CI_Model{

	public function __construct(){

		$this->load->database();

	}


	public function check_coupon($code){

		$query=$this->db->get_where('promo_codes',array('promo_code'=>$code));
		$result=$query->row_array();

		$data[]=array('status'=>"200","msg"=>"Promo Applied Successfuly","details"=>$result);

		return $data;
	}
}

?>
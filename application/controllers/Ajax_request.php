<?php 
header('Access-Control-Allow-Origin: *');
class ajax_request extends CI_Controller{

  public function __construct(){
  parent::__construct(); 
    $this->load->library('session');
    $this->load->library('email');

  }


//header('Content-Type: application/json');

	public function check_promo(){

$this->load->model('Promo');


$code=$this->input->post('promo_code');

$data=$this->Promo->check_coupon($code);

$promo_for=$data[0]['details']['message'];
$discount=$data[0]['details']['discount'];


$cart = $this->session->userdata('cart');

$disc=0;
$disc2=0;

foreach($cart as $c){

	$event_name=$c[5];
	$price_tot=(int)$c[2]*(int)$c[3];

	if($event_name==$promo_for){
		$disc=$price_tot*$discount;
		$disc=$disc/100;
		$disc2=$disc2+$disc;
	}
}

$data[0]['details']['tot_discount']=round($disc2,2);

$response=json_encode($data);
echo $response;

//echo $disc;


}


public function add_cart(){

$this->load->library('session');

$id=$this->input->post('id');
$name=$this->input->post('name');
$price=$this->input->post('price');
$qty=$this->input->post('qty');
$flag_time=$this->input->post('flag_time');
$event_name=$this->input->post('event_name');

if(isset($_SESSION['cart'][$id])){

	$qty=(int)$_SESSION['cart'][$id][3]+(int)$qty;

	$_SESSION['cart'][$id]=array($id,$name,$price,$qty,$flag_time,$event_name);

}

else{

$_SESSION['cart'][$id]=array($id,$name,$price,$qty,$flag_time,$event_name);

}

echo "success";

}


public function remove_cart(){

$this->load->library('session');

$id=$this->input->post('id');
$name=$this->input->post('name');
$price=$this->input->post('price');
$qty=$this->input->post('qty');
$flag_time=$this->input->post('flag_time');
$event_name=$this->input->post('event_name');

if(isset($_SESSION['cart'][$id])){


	$qty=(int)$_SESSION['cart'][$id][3]-(int)$qty;
	if($qty==0){

unset($_SESSION['cart'][$id]);

	}
	else{
		$_SESSION['cart'][$id]=array($id,$name,$price,$qty,$flag_time,$event_name);
	}
	

}

echo "success";

}

public function delete_cart(){

$this->load->library('session');

$id=$this->input->post('id');

if(isset($_SESSION['cart'][$id])){
	
unset($_SESSION['cart'][$id]);

}

echo "success";

}


public function get_otp(){

$mobile=$this->input->post('mobile');

$otp=mt_rand(111111,999999);



$key = "xeRlvjRrCuUODAB9";	
$mbl="8237563813";


$msg='Dear Customer, Your OTP is '.$otp.' . Use this to reset your password. After reset, visit www.champendurance.com to log in. Thank you. Team Champ Endurance.';

$message_content=urlencode($msg);

$senderid="CHPEND";	
$route= 1;
$templateid="1707166201655141553";

$url = "https://www.hellotext.live/vb/apikey.php?apikey=$key&senderid=$senderid&templateid=$templateid&number=$mbl&message=$message_content";

$output = file_get_contents($url);	/*default function for push any url*/

echo $otp;

//https://www.hellotext.live/vb/apikey.php?apikey=xeRlvjRrCuUODAB9&senderid=CHPEND&templateid=1707165520128975508&number=8237563813&message=Dear%20Customer,%20Your%20OTP%20is%20123456%20.%20Use%20this%20to%20reset%20your%20password.%20After%20reset,%20visit%20www.champendurance.com%20to%20log%20in.%20Thank%20you.%20Team%20Champ%20Endurance.

//1707166201655141553

}






} 

?>
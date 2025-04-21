<?php 

class payment extends CI_Controller{

public function __construct(){
  parent::__construct(); 
   $this->load->library('session');
    $this->load->library('email');

  }

//header('Content-Type: application/json');

	public function pay(){


//$data['allpostdata']=$this->input->post();

    $data['title']='Champ Endurance: Home';

    $cart = $this->session->userdata('cart');
    $data['cart']=$cart;

   date_default_timezone_set('Asia/Kolkata');
  
  $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id']; 


  $this->load->model('Insert_order');
      
$sta=$this->Insert_order->check_merch_id($this->input->post('merchant_order_id'));

if($sta[0][0]==0){

  $todate=date("d-m-Y h:i:s a");

  $todate2=date('Y-m-d');

  $status[] = array('Order Placed',date("d-m-Y h:i:s a"));
  $ordstatus=json_encode($status);

//status 0 for success and 1 for pending

         $data = array( 
            'uid' => $uid, 
            'name' => $data['userdata']['userdata']['fname'], 
            'mobile' => $data['userdata']['userdata']['mobile'],
            'pincode' => "",
            'house' => "",
            'road' => "",
            'landmark' => "",
            'state' => "",
            'dist' => "",
            'addtype' => "",
            'total_amt' => $this->input->post('total'),
            'ord_type' => "",
            'trnid' => "",
            'todate' =>  $todate,
            'order_status' => $ordstatus,
            'status' => 1,
            'del_by' => '',
            'txn_resp' => '',
            'promo' => $this->input->post('promo_code'),  
            'pdisc' => $this->input->post('promo_disc'),
            'del_charges' => "",
            'sub_total' => $this->input->post('sub_total'),
            'merch_id'=>$this->input->post('merchant_order_id'),
            'order_date'=>$todate2
         ); 
      
         $ordid=$this->Insert_order->place_order($data); 

$event_cat=$this->input->post('event_cat');
$prod_id=$this->input->post('prod_id');
$event_price=$this->input->post('event_price');
$size=$this->input->post('size');
$full_name=$this->input->post('full_name');
$email=$this->input->post('email');
$contact=$this->input->post('contact');
$gender=$this->input->post('gender');
$city=$this->input->post('city');
$blood=$this->input->post('blood');
$emergency=$this->input->post('emergency');
$dob=$this->input->post('dob');
$merchant_order_id=$this->input->post('merchant_order_id');

         for($i=0;$i<count($event_cat);$i++){

$qr=$merchant_order_id.'-'.$i;

$place_item = array('pid'=>$prod_id[$i],'pname'=> $event_cat[$i],'price'=> $event_price[$i],'mrp'=> $event_price[$i],'oid'=>$ordid,'status'=>1,'ord_status'=>$ordstatus,'qty'=>1,'size'=>$size[$i],'name'=>$full_name[$i],'email'=>$email[$i],'contact'=>$contact[$i],'gender'=>$gender[$i],'city'=>$city[$i],'blood'=>$blood[$i],'emergency'=>$emergency[$i],'dob'=>$dob[$i],'merch_id'=>$merchant_order_id,'qr'=>$qr); 

              $insertickedid=$this->Insert_order->insert_item($place_item);

$url="http://qr.champendurance.com/index.php?id=".$qr;

$postData = array(
  "api_token_id" => "123456"
);

$data_string = json_encode($postData);

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data_string
    //,CURLOPT_FOLLOWLOCATION => true
));

//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$output = curl_exec($ch);

if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

}


}


$this->load->view('header/head',$data);
$this->load->view('header/header');
$this->load->view('pay/pay');
$this->load->view('footer/footer');


}



	public function verify(){

//$data['allpostdata']=$this->input->post();

    $data['title']='Champ Endurance: Home';

    $cart = $this->session->userdata('cart');
    $data['cart']=$cart;

    $data['userdata'] = $this->session->userdata('userdata');

$this->load->view('header/head',$data);
$this->load->view('header/header');
$this->load->view('pay/verify');
//$this->load->view('footer/footer');

	}




public function pay_success2(){

 $redirect_to=$_SERVER["HTTP_REFERER"];
  $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id'];

$ord_data=json_decode($this->session->userdata('all_data'),true);
$raz_pay_id= $this->session->userdata('raz_pay_id');

  $this->load->model('Insert_order');
  
 $this->load->model('Orders');

$data['my_orders']=$this->Orders->retrive_orders_update($ord_data['merchant_order_id']);

$data1 = array('trnid' => $raz_pay_id,'status'=>0); 

$this->Insert_order->update_order($data1,$ord_data['merchant_order_id']); 

$data2 = array('status'=>0); 
$this->Insert_order->update_order_item($data2,$ord_data['merchant_order_id']); 


print_r($data['my_orders']);

$email_message2='';

$mailto_email='';

foreach($data['my_orders'] as $ord){
$tnrid= $ord['trnid'];

foreach($ord['items'] as $itm_ord){


$ticket_download_link='https://'.base_url().'Ticket/'.$itm_ord['id'];

$ticket_download_link2=base_url().'Ticket/'.$itm_ord['id'];

$email_message2.="<b>Name: </b>".$itm_ord['name']."<br>";
$email_message2.="<b>Category: </b>".$itm_ord['event_name']."<br>";
$email_message2.="<b>Phone: </b>".$itm_ord['contact']."<br>";
$email_message2.="<b>Email: </b>".$itm_ord['email']."<br>";
$email_message2.="<b>Gender: </b>".$itm_ord['gender']."<br>";
$email_message2.="<b>DOB: </b>".$itm_ord['dob']."<br>";
$email_message2.="<b>T-Shirt Size: </b>".$itm_ord['size']."<br>";
$email_message2.="<b>Blood Group: </b>".$itm_ord['blood']."<br>";
$email_message2.="<b>Emergency: </b>".$itm_ord['emergency']."<br>";
$email_message2.="<b>OrderId/Ticket No.: </b>".$itm_ord['merch_id']."<br>";
$email_message2.="<b>Transaction Id: </b>".$tnrid."<br><br><br>";
$email_message2.="<b>Downlod/Print Ticket: </b>".$ticket_download_link."<br><br><br><br>";


if($mailto_email){
    $mailto_email=$mailto_email.','.$itm_ord['email'];
}else{
     $mailto_email=$itm_ord['email'];
}  


//sms ticket

$key = "xeRlvjRrCuUODAB9";  
$mbl=$itm_ord['contact'];

$otp=mt_rand(111111,999999);

$var1=$itm_ord['event_name'];
$var2="champendurance.com";


$msg='Dear Customer, You have successfully booked your ticket for '.$var1.' on '.$var2.'. Please check on '.$ticket_download_link2.' to download the ticket. Thank you. Team Champ Endurance.';

$message_content=urlencode($msg);

$senderid="CHPEND"; 
$route= 1;
$templateid="1707165520144488150";

$url = "https://www.hellotext.live/vb/apikey.php?apikey=$key&senderid=$senderid&templateid=$templateid&number=$mbl&message=$message_content";

$output = file_get_contents($url);  /*default function for push any url*/

//end sms ticket


}

}


$this->email->set_mailtype("html");
$this->email->from('info@champendurance.com', 'Champ Endurance');

$this->email->to($mailto_email);


$this->email->subject('Ticket Booking details');
$this->email->message($email_message2);
$this->email->send();


$this->email->set_mailtype("html");
$this->email->from('info@champendurance.com', 'Champ Endurance');
$this->email->to('info@champendurance.com.test-google-a.com','contact@3dotsdesign.in');
$this->email->subject('Ticket Booking details');
$this->email->message($email_message2);
$this->email->send();


 $this->session->unset_userdata('cart');
         $base='https://'.base_url().'Bookings/';
         redirect($base); 
 //redirect($url);


}




public function pay_success(){

      $redirect_to=$_SERVER["HTTP_REFERER"];
  date_default_timezone_set('Asia/Kolkata');
  
  $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id']; 


  $this->load->model('Insert_order');
      
  $todate=date("d-m-Y h:i:s a");

  $todate2=date('Y-m-d');

  $status[] = array('Order Placed',date("d-m-Y h:i:s a"));
  $ordstatus=json_encode($status);


     $ord_data=json_decode($this->session->userdata('all_data'),true);
      $raz_pay_id= $this->session->userdata('raz_pay_id');


         $data = array( 
            'uid' => $uid, 
            'name' => $data['userdata']['userdata']['fname'], 
            'mobile' => $data['userdata']['userdata']['mobile'],
            'pincode' => "",
            'house' => "",
            'road' => "",
            'landmark' => "",
            'state' => "",
            'dist' => "",
            'addtype' => "",
            'total_amt' => $ord_data['total'],
            'ord_type' => "",
            'trnid' => $raz_pay_id,
            'todate' =>  $todate,
            'order_status' => $ordstatus,
            'status' => 0,
            'del_by' => '',
            'txn_resp' => '',
            'promo' => $ord_data['promo_code'],  
            'pdisc' => $ord_data['promo_disc'],
            'del_charges' => "",
            'sub_total' => $ord_data['sub_total'],
            'merch_id'=>$ord_data['merchant_order_id'],
            'order_date'=>$todate2
         ); 
      
         $ordid=$this->Insert_order->place_order($data); 

         $cart = $this->session->userdata('cart');


$mailto_email='';

         for($i=0;$i<count($ord_data['event_cat']);$i++){

            $place_item = array('pid'=>$ord_data['prod_id'][$i],'pname'=> $ord_data['event_cat'][$i],'price'=> $ord_data['event_price'][$i],'mrp'=> $ord_data['event_price'][$i],'oid'=>$ordid,'status'=>0,'ord_status'=>$ordstatus,'qty'=>1,'size'=>$ord_data['size'][$i],'name'=>$ord_data['full_name'][$i],'email'=>$ord_data['email'][$i],'contact'=>$ord_data['contact'][$i],'gender'=>$ord_data['gender'][$i],'city'=>$ord_data['city'][$i],'blood'=>$ord_data['blood'][$i],'emergency'=>$ord_data['emergency'][$i],'dob'=>$ord_data['dob'][$i],'merch_id'=>$ord_data['merchant_order_id']); 

              $insertickedid=$this->Insert_order->insert_item($place_item);

$ticket_download_link='https://'.base_url().'Ticket/'.$insertickedid;

$email_message2.="<b>Name: </b>".$ord_data['full_name'][$i]."<br>";
$email_message2.="<b>Category: </b>".$ord_data['event_cat'][$i]."<br>";
$email_message2.="<b>Phone: </b>".$ord_data['contact'][$i]."<br>";
$email_message2.="<b>Email: </b>".$ord_data['email'][$i]."<br>";
$email_message2.="<b>Gender: </b>".$ord_data['gender'][$i]."<br>";
$email_message2.="<b>DOB: </b>".$ord_data['dob'][$i]."<br>";
$email_message2.="<b>T-Shirt Size: </b>".$ord_data['size'][$i]."<br>";
$email_message2.="<b>Blood Group: </b>".$ord_data['blood'][$i]."<br>";
$email_message2.="<b>Emergency: </b>".$ord_data['emergency'][$i]."<br>";
$email_message2.="<b>OrderId/Ticket No.: </b>".$ord_data['merchant_order_id']."<br>";
$email_message2.="<b>Transaction Id: </b>".$raz_pay_id."<br><br><br>";
$email_message2.="<b>Downlod/Print Ticket: </b>".$ticket_download_link."<br><br><br><br>";


if($mailto_email){
    $mailto_email=$mailto_email.','.$ord_data['email'][$i];
}else{
     $mailto_email=$ord_data['email'][$i];
}

         }



//email send

$this->email->set_mailtype("html");
$this->email->from('info@champendurance.com', 'Champ Endurance');
$this->email->to($mailto_email,'info@champendurance.com','contact@3dotsdesign.in','info@champendurance.com.test-google-a.com');
 
$this->email->subject('Ticket Booking details');
$this->email->message($email_message2);
$this->email->send();





$url="http://qr.champendurance.com/index.php?id=".$ord_data['merchant_order_id'];

$postData = array(
  "api_token_id" => "123456"
);

$data_string = json_encode($postData);

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data_string
    //,CURLOPT_FOLLOWLOCATION => true
));

//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$output = curl_exec($ch);

if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);





 $this->session->unset_userdata('cart');
         $base='https://'.base_url().'Bookings/';
         redirect($base); 
 //redirect($url);


}


} 

?>
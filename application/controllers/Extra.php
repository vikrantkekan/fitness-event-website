
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class extra extends CI_Controller{


  public function __construct(){
  parent::__construct(); 
    $this->load->library('session');
    $this->load->library('email');

  }

 
  public function index($page='home'){

   
    $data['title']='Champ Endurance: Home';

    $cart = $this->session->userdata('cart');
    $data['cart']=$cart;

    $data['userdata'] = $this->session->userdata('userdata');

$this->load->view('header/head',$data);
$this->load->view('header/header');
$this->load->view('app/'.$page);
$this->load->view('footer/footer');

}


public function privacy(){

  $this->load->helper('url');

$data['title']="Champ Endurance : Privacy Policy";

  $data['cart']=$this->session->userdata('cart');
 $data['userdata']=$this->session->userdata('userdata');

 $this->load->view('header/head',$data);
 $this->load->view('header/header');
 $this->load->view('app/privacy');
 $this->load->view('footer/footer');

}

public function disclaimer(){

  $this->load->helper('url');

$data['title']="Champ Endurance : Shipping Policy";

  $data['cart']=$this->session->userdata('cart');
 $data['userdata']=$this->session->userdata('userdata');

 $this->load->view('header/head',$data);
 $this->load->view('header/header');
 $this->load->view('app/disclaimer');
 $this->load->view('footer/footer');

}


public function return(){

  $this->load->helper('url');

$data['title']="Champ Endurance : Return and Refund Policy";

  $data['cart']=$this->session->userdata('cart');
 $data['userdata']=$this->session->userdata('userdata');

 $this->load->view('header/head',$data);
 $this->load->view('header/header');
 $this->load->view('app/return');
 $this->load->view('footer/footer');

}


public function termsofServices(){

  $this->load->helper('url');

$data['title']="Champ Endurance : Terms of Services";

  $data['cart']=$this->session->userdata('cart');
 $data['userdata']=$this->session->userdata('userdata');

 $this->load->view('header/head',$data);
 $this->load->view('header/header');
 $this->load->view('app/termsofservices');
 $this->load->view('footer/footer');

}



public function faq(){

  $this->load->helper('url');

$data['title']="Champ Endurance : FAQs";

  $data['cart']=$this->session->userdata('cart');
 $data['userdata']=$this->session->userdata('userdata');

 $this->load->view('header/head',$data);
 $this->load->view('header/header');
 $this->load->view('app/faq');
 $this->load->view('footer/footer');

}




public function enquiry_form(){

  $this->load->helper('url');

$data['title']="Champ Endurance : Thank You";

$name=$this->input->post('first_name');
$telephone=$this->input->post('telephone');
$email=$this->input->post('email');
$message=$this->input->post('message');


  $data['cart']=$this->session->userdata('cart');
 $data['userdata']=$this->session->userdata('userdata');


$email_message2="<b>Name: </b>".$name."<br>";
$email_message2.="<b>Phone: </b>".$telephone."<br>";
$email_message2.="<b>Email: </b>".$email."<br>";
$email_message2.="<b>Message: </b>".$message."<br>";


$this->email->set_mailtype("html");
$this->email->from('info@champendurance.com', 'Champ Endurance');
$this->email->to('info@champendurance.com','contact@3dotsdesign.in','info@champendurance.com.test-google-a.com');
$this->email->subject('Enquiry');
$this->email->message($email_message2);
$this->email->send();


 $this->load->view('header/head',$data);
 $this->load->view('header/header');
 $this->load->view('app/thankyou');
 $this->load->view('footer/footer');

}


 public function clear_cache_all() { 
         $this->output->delete_cache(); 
        
         $this->output->clear_all_cache();
      }






}

?>

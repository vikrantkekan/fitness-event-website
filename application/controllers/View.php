<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view extends CI_Controller{


  public function __construct(){
  parent::__construct(); 
   $this->load->library('session');
    $this->load->library('email');
  
    //$this->output->delete_cache();
 
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

  public function stories($page='home'){

    $data['title']='Champ Endurance: Home';

    $cart = $this->session->userdata('cart');
    $data['cart']=$cart;

    $data['userdata'] = $this->session->userdata('userdata');
/*
$this->load->view('header/head',$data);
$this->load->view('header/header');
$this->load->view('app/home/#stories');
$this->load->view('footer/footer');
*/
$base='https://'.base_url().'#stories';
redirect($base);

}

 public function services($page='home'){


    $data['title']='Champ Endurance: Home';

    $cart = $this->session->userdata('cart');
    $data['cart']=$cart;

    $data['userdata'] = $this->session->userdata('userdata');
/*
$this->load->view('header/head',$data);
$this->load->view('header/header');
$this->load->view('app/home/#stories');
$this->load->view('footer/footer');
*/
$base='https://'.base_url().'#services';
redirect($base);

}


public function about(){

  $this->load->helper('url');

$data['title']="Champ Endurance : About";

  $data['cart']=$this->session->userdata('cart');
 $data['userdata']=$this->session->userdata('userdata');

 $this->load->view('header/head',$data);
 $this->load->view('header/header');
 $this->load->view('app/about');
 $this->load->view('footer/footer');

}


public function book($book_name,$id = null){

  
  
        $this->load->model('Single_product');
        $data['singlebook']=$this->Single_product->retrive_product($id);

        $this->load->model('Review');
        $data['reviews']=$this->Review->all_reviews();
        
$data['title']='Champ Endurance: Events';


        $cart = $this->session->userdata('cart');
        $data['cart']=$cart;

        $data['userdata'] = $this->session->userdata('userdata');

        $this->load->view('header/head',$data);
        $this->load->view('header/header');
        $this->load->view('app/details');
        $this->load->view('footer/footer');

}




public function product($main_cat,$id = null){
    

         $this->load->model('Category');
         $data['cats']=$this->Category->retrive_cat($id);

        $this->load->model('Products');
         $data['event_cat']=$this->Products->retrive_cards_end_cat($id);

$data['main_id']=$id;
       
      //  $this->load->model('Review');
      //  $data['reviews']=$this->Review->all_reviews();
        
        $data['title']='Champ Endurance: '.$data['cats'][0]['name'];


        $cart = $this->session->userdata('cart');
        $data['cart']=$cart;

        $data['userdata'] = $this->session->userdata('userdata');

        $this->load->view('header/head',$data);
        $this->load->view('header/header');
        $this->load->view('app/book');
        $this->load->view('footer/footer');
        
     
}


//event page
public function main_cat($main_cat,$id = null){
    
//$this->output->delete_cache(); 

  //$this->load->model('Category');
  //$data['cats']=$this->Category->retrive_cat();

  //$this->load->model('Products');
 // $data['cards']=$this->Products->retrive_cards_main($id);

      $data['title']='Champ Endurance: '.$main_cat;

      $data['url']=$main_cat;
      $data['mainid']=$id;

        $cart = $this->session->userdata('cart');
        $data['cart']=$cart;

        $data['userdata'] = $this->session->userdata('userdata');

        $this->load->view('header/head',$data);
        $this->load->view('header/header');
        $this->load->view('app/'.$main_cat);
        $this->load->view('footer/footer');

}


public function signin(){

  
     
$data['title']='Champ Endurance: Signin';


        $cart = $this->session->userdata('cart');
        $data['cart']=$cart;

        $data['userdata'] = $this->session->userdata('userdata');

        $this->load->view('header/head',$data);
        $this->load->view('header/header');
        $this->load->view('app/signin');
        $this->load->view('footer/footer');

}


public function signup(){

  
     
$data['title']='Champ Endurance: Signin';


        $cart = $this->session->userdata('cart');
        $data['cart']=$cart;

        $data['userdata'] = $this->session->userdata('userdata');

        $this->load->view('header/head',$data);
        $this->load->view('header/header');
        $this->load->view('app/signup');
        $this->load->view('footer/footer');

}

public function cart(){


$data['title']='Champ Endurance: Cart';


        $cart = $this->session->userdata('cart');
        $data['cart']=$cart;

        $data['userdata'] = $this->session->userdata('userdata');

        $this->load->view('header/head',$data);
        $this->load->view('header/header');
        $this->load->view('app/cart');
        $this->load->view('footer/footer');

}


public function add_to_cart($book_name,$mrp,$oprice,$id = null){

  $data['title']=$book_name;

  
        $this->load->model('Single_product');
        $data['singlebook']=$this->Single_product->retrive_product($id);

        //$this->session->unset_userdata('cart');

       // $newcart[] =$this->session->userdata('cart');

       $newcart=$this->session->userdata('cart');
       $i=count($newcart);
     $newcart[$i+1] = array('posid'=>$i+1,'id'=>$id,'name'=> $book_name,'mrp'=> $mrp,
      'oprice'=> $oprice,'qty'=> 1,'delivery'=>$data['singlebook']['del_charges'],'color'=>'Black'); 

      //array_push($newcart[],$newcart_new);

       $this->session->set_userdata('cart',$newcart);

       $cart = $this->session->userdata('cart');
       $data['cart']=$cart;

       $data['userdata'] = $this->session->userdata('userdata');

       $redirect_to='https://'.base_url().'Cart/';

       redirect($redirect_to);  


}

public function add_to_cart2(){

  
$qty=$this->input->post('qty');
$book_name=$this->input->post('book_name');
$mrp=$this->input->post('mrp');
$oprice=$this->input->post('oprice');
$id=$this->input->post('id');


$data['title']=$book_name;
  
        $this->load->model('Single_product');
        $data['singlebook']=$this->Single_product->retrive_product($id);

        //$this->session->unset_userdata('cart');

       // $newcart[] =$this->session->userdata('cart');

       $newcart=$this->session->userdata('cart');
       $i=count($newcart);
     $newcart[$i+1] = array('posid'=>$i+1,'id'=>$id,'name'=> $book_name,'mrp'=> $mrp,
      'oprice'=> $oprice,'qty'=> $qty,'delivery'=>$data['singlebook']['del_charges'],'color'=>'Black'); 

      //array_push($newcart[],$newcart_new);

       $this->session->set_userdata('cart',$newcart);

       $cart = $this->session->userdata('cart');
       $data['cart']=$cart;

       $data['userdata'] = $this->session->userdata('userdata');

       $redirect_to='https://'.base_url().'Cart/';

       redirect($redirect_to);  


}



public function remove_from_cart($id){

  
       $cart = $this->session->userdata('cart');

       //$this->session->unset_userdata('cart');
       
unset($_SESSION['cart'][$id]);

       $redirect_to=$_SERVER["HTTP_REFERER"];

       redirect($redirect_to);  

}



public function login(){

  $this->load->model('Login');

$mobile=$this->input->post('mobile');
$password=$this->input->post('password');



  $data['userdata']=$this->Login->login_user($mobile,$password);

  

  $data['cart']=$this->session->userdata('cart');

$redirect=$_SERVER['HTTP_REFERER'];

if($data['userdata']['userdata']['id']){

$this->session->set_userdata('userdata',$data['userdata']);
$this->session->set_flashdata('success','Logged in Successfully');

$redirect='https://'.base_url().'Checkout';

redirect($redirect);

}
else{
$this->session->set_flashdata('error','Mobile Number/Pasword Incorrect');
redirect($redirect);
}


  

}




public function forget(){
  
  $data['title']="Champ Endurance : Forget Password";


  
  $this->load->view('header/head',$data);
  $this->load->view('header/header');
  $this->load->view('app/forget-password');
  $this->load->view('footer/footer');

}

public function change_password(){
  

  $mob=$this->input->post('mobile');
  $password=$this->input->post('password');

  $this->load->model('Profile');
  
 $data = array('password ' => $password); 

$this->Profile->update($data,$mob);
       
  $this->session->set_flashdata('success','Password Changed Successfully');        
$redirect_to='https://'.base_url().'Signin';
redirect($redirect_to); 


}



public function profile(){
  
  $data['title']="Champ Endurance : My Profile";



  $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id']; 

  $this->load->model('Address');
  $data['address']=$this->Address->fetch_address($uid);

  
  $cart = $this->session->userdata('cart');
  $data['cart']=$cart;
 
  $this->load->view('header/head',$data);
  $this->load->view('header/header');
  $this->load->view('app/profile');
  $this->load->view('footer/footer');

}


public function register(){

date_default_timezone_set('Asia/Kolkata');

$mobile=$this->input->post('mobile');
 
$data=array('fname'=>$this->input->post('name'),
  'lname'=>$this->input->post('name'),
  'mobile'=>$this->input->post('mobile'),
  'todate'=>date('d/m/Y h:i:s a'),
  'last'=>date('d/m/Y h:i:s a'),
  'mail'=>$this->input->post('email'),
  'password'=>$this->input->post('password')
);


$this->load->model('Register');
$data['userdata']=$this->Register->new_user($data,$mobile);

$redirect=$_SERVER['HTTP_REFERER'];

if(isset($data['userdata']['userdata']['id'])){

$this->session->set_userdata('userdata',$data['userdata']);

$this->session->set_flashdata('success','Registered Successfully');

$redirect='https://'.base_url().'Checkout';

redirect($redirect);


}
else{

$this->session->set_flashdata('error',$mobile.' is already registered, try to login');
redirect($redirect);
}



}






public function logout(){


  $redirect_to=$_SERVER["HTTP_REFERER"];

  $this->session->unset_userdata('userdata');
  $this->session->unset_userdata('cart');
  //redirect($redirect_to);  

  $base='https://'.base_url();
  redirect($base); 

}

public function orders(){ 


  $data['title']='Champ Endurance : My Tickets';



  $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id']; 

  
  $this->load->model('Orders');

  $data['my_orders']=$this->Orders->retrive_orders($uid);

  $cart = $this->session->userdata('cart');
  $data['cart']=$cart;

  $this->load->view('header/head',$data);
  $this->load->view('header/header');
  $this->load->view('app/orders');
  $this->load->view('footer/footer');

}


public function print_ticket($id=null,$cont){ 


  $data['title']='Champ Endurance : My Ticket';

  
  $this->load->model('Orders');

  $data['my_orders']=$this->Orders->retrive_ticket($id);

if($data['my_orders']){
$contact=$data['my_orders'][0]['items'][0]['contact'];
$contact=substr($contact, -10);
$mobile=substr($cont, -10);



if($mobile==$contact){
 $this->load->view('header/head',$data);
 $this->load->view('app/ticket'); 
}
else{

  $data['id']=$id;
  $this->session->set_flashdata('error','Verification Error, Try Again');

  $this->load->view('header/head',$data);
  $this->load->view('app/ticket2');

}

}else{
   $data['id']=$id;
  $this->session->set_flashdata('error','Verification Error, Try Again');

  $this->load->view('header/head',$data);
  $this->load->view('app/ticket2');
}


}



public function ticket($id=null){ 


  $data['title']='Champ Endurance : My Ticket';

  
  $this->load->model('Orders');

  $data['id']=$id;


  $this->load->view('header/head',$data);
  
  $this->load->view('app/ticket2');


}

public function view_ticket(){ 


  $data['title']='Champ Endurance : My Ticket';

$mobile=$this->input->post('mobile');
$tickid=$this->input->post('tickid');
  
  $this->load->model('Orders');

  $data['my_orders']=$this->Orders->retrive_ticket($tickid);

if($data['my_orders']){
$contact=$data['my_orders'][0]['items'][0]['contact'];

$contact=substr($contact, -10);
$mobile=substr($mobile, -10);


if($mobile==$contact){
 $this->load->view('header/head',$data);
 $this->load->view('app/ticket'); 
}else{

  $data['id']=$tickid;
  $this->session->set_flashdata('error','Verification Error, Try Again');

  $this->load->view('header/head',$data);
  $this->load->view('app/ticket2');

}

}else{

    $data['id']=$tickid;
  $this->session->set_flashdata('error','Verification Error, Try Again');

  $this->load->view('header/head',$data);
  $this->load->view('app/ticket2');

}

 

}




public function checkout(){ 


  $data['title']="Champ Endurance : Checkout";

if($this->session->userdata('userdata')){
   $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id']; 
  $this->load->model('Address');
  $data['address']=$this->Address->fetch_address($uid);
}
 
 

  

  
  $cart = $this->session->userdata('cart');
  $data['cart']=$cart;
 
  $this->load->view('header/head',$data);
  $this->load->view('header/header');
  $this->load->view('app/checkout');
  $this->load->view('footer/footer');


}


public function add_address(){ 

 
  $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id']; 

  $this->load->model('Add_address');
  
  $add_id=$this->input->post('add_id');

 
         $data = array( 
            'uid' => $uid, 
            'name' => $this->input->post('name'), 
            'mobile' => $this->input->post('mobile'),
            'house' => $this->input->post('address1'),
            'road' => $this->input->post('address2'),
            'landmark' => $this->input->post('Landmark'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'pin' => $this->input->post('pin'),
            'type' => $this->input->post('type'),
         ); 
      

         if(isset($add_id)){
          $this->Add_address->update($data,$add_id);
        }else{
          $this->Add_address->insert($data);
        }
          
$redirect_to=$_SERVER['HTTP_REFERER'];
 
         $base='https://'.base_url().'Checkout';
         redirect($base); 


}


public function edit_address(){ 

 
  $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id']; 

  $this->load->model('Add_address');
  
  $add_id=$this->input->post('add_id');

 
         $data = array( 
            'uid' => $uid, 
            'name' => $this->input->post('name'), 
            'mobile' => $this->input->post('mobile'),
            'house' => $this->input->post('address1'),
            'road' => $this->input->post('address2'),
            'landmark' => $this->input->post('Landmark'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'pin' => $this->input->post('pin'),
            'type' => $this->input->post('type'),
         ); 
      

         if(isset($add_id)){
          $this->Add_address->update($data,$add_id);
        }else{
          $this->Add_address->insert($data);
        }
          
$redirect_to=$_SERVER['HTTP_REFERER'];
 
         redirect($redirect_to); 


}


public function place_order(){ 

  $redirect_to=$_SERVER["HTTP_REFERER"];
  date_default_timezone_set('Asia/Kolkata');
  
  $data['userdata'] = $this->session->userdata('userdata');
  $uid=$data['userdata']['userdata']['id']; 

  $this->load->model('Insert_order');
      
  $todate=date("d-m-Y h:i:s a");
  $status[] = array('Order Placed',date("d-m-Y h:i:s a"));
  $ordstatus=json_encode($status);

         $data = array( 
            'uid' => $uid, 
            'name' => $this->input->post('name'), 
            'mobile' => $this->input->post('mobile'),
            'pincode' => $this->input->post('pin'),
            'house' => $this->input->post('address1'),
            'road' => $this->input->post('address2'),
            'landmark' => $this->input->post('Landmark'),
            'state' => $this->input->post('state'),
            'dist' => $this->input->post('city'),
            'addtype' => $this->input->post('type'),
            'total_amt' => $this->input->post('final_amt'),
            'ord_type' => $this->input->post('ord_type'),
            'trnid' => $this->input->post('trnid'),
            'todate' =>  $todate,
            'order_status' => $ordstatus,
            'status' => 0,
            'del_by' => '',
            'txn_resp' => '',
            'promo' => $this->input->post('promo_code'),  
            'pdisc' => $this->input->post('promo_disc'),
            'del_charges' => $this->input->post('del_charge'),
            'sub_total' => $this->input->post('subtotal')
         ); 
      
         $ordid=$this->Insert_order->place_order($data); 

         $cart = $this->session->userdata('cart');

       foreach($cart as $item){
          
     $place_item = array('pid'=>$item['id'],'pname'=> urldecode($item['name']),'price'=> $item['oprice'],'mrp'=> $item['mrp'],'oid'=>$ordid,'status'=>0,'ord_status'=>$ordstatus,'qty'=>$item['qty']); 
    $this->Insert_order->insert_item($place_item);

         }
       

 $this->session->unset_userdata('cart');
         $base='https://'.base_url().'Orders/';
         redirect($base); 


}



public function review(){

$name=$this->input->post('name');
$subject=$this->input->post('subject');
$comment=$this->input->post('comment');

$this->load->model('Review');

$data=array('name'=>$name,'subject'=>$subject,'comment'=>$comment,'todate'=>date('d-m-Y'),'status'=>1);

$this->Review->add_review($data);

$redirect_to=$_SERVER['HTTP_REFERER'];

redirect($redirect_to);

}


}

?>

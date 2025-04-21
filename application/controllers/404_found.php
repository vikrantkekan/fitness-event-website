<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class 404_found extends CI_Controller{
  public function index($page='index'){
    $data['title']=$page;

//$this->load->view('seo/header');
$this->load->view('seo/'.$page,$data);
//$this->load->view('seo/footer');

  }
}

?>

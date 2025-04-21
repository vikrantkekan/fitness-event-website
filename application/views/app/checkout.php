<?php 


if(!isset($_SESSION['cart'])){

  header('location:https://'.base_url());

}


?>
<style>
label {
  font-weight: 400 !important;
color: #444343 !important;
}
  @media (min-width: 775px) and (max-width: 3072px) {
   .affix {
    top: 120px;
    z-index: 99 !important;
    right: 13%;
    width: 24.5%;

  }
  
  }

    @media only screen and (max-width: 720px) {
 .affix {
    bottom: 0px;
    width: auto;
    position: relative;

  }
 
  }


 .hov:hover{
  color: #000 !important;
 }

</style>




 <!-- Material Design Bootstrap -->
    <link href="https://<?php echo base_url();?>css/mdb3/css/mdb.css" rel="stylesheet">
    <link href="https://<?php echo base_url();?>css/mdb3/css/style.css" rel="stylesheet">


       <!-- JQuery -->
    <script type="text/javascript" src="https://<?php echo base_url();?>css/mdb3/js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://<?php echo base_url();?>css/mdb3/js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="https://<?php echo base_url();?>css/mdb3/js/mdb.js"></script>



<link rel="stylesheet" href="https://<?php echo base_url();?>css/style.css">
</head>






<div id="slider_car" class="container-fluid" style="background-color: #F2F2F2;">

</div>


 <form action="https://<?php echo base_url();?>Pay" method="post" >

<div style="background-color: #F2F2F2;">


<!-- CHAMP-2 -->
<div  class="container" style="padding-bottom:60px;letter-spacing: 1px;">
  <div class="row">

 <?php 
 if(isset($userdata['userdata']['fname'])){
  ?>  

    <div class="col-sm-8">
<div style="background-color: #E5E5E5;padding:18px;">
   <p style="color:#000;"><i class="fa fa-users" aria-hidden="true"></i> Attendee Details</p>

<hr style="border:1px solid #29b99a;">

  

<?php


$x=0;
foreach($_SESSION['cart'] as $c){

?>

<p style="color:#000;"><?php echo $c[1];?> (<?php echo $c[5];?>)</p>


<?php 

for($i=1;$i<=$c[3];$i++){
  ?>

<div class="panel panel-default" style="background-color: #fff;border:1px solid #29b99a;">
  <div class="panel-heading" style="background-color:#29b99a !important;">Attendee <?php echo $i;?> Details</div>

<div class="panel-body">

    <input id="prod_id" name="prod_id[]" type="hidden"  value="<?php echo $c[0];?>">
    <input id="event_cat" name="event_cat[]" type="hidden"  value="<?php echo $c[1];?>">
    <input id="event_price" name="event_price[]" type="hidden"  value="<?php echo $c[2];?>">

      <input id="flag_off" name="flag_off[]" type="hidden"  value="<?php echo $c[4];?>">

      <div class="row">
        <div class="input-field col-md-12">
          <input id="full_name" name="full_name[]" type="text" class="validate" required>
          <label for="full_name">Full Name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col-md-6">
          <input id="email" name="email[]" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>

        <div class="input-field col-md-6">
          <input id="contact" name="contact[]" type="number" value="+91" class="validate" required>
          <label for="contact">Contact Number</label>
        </div>
      </div>
<br>
      <div class="row">
      <div class="col-md-12">
        <label for="gender" style="color:#444343 !important;font-size:16px;">Gender</label><br>

      <input name="gender[<?php echo $x;?>]" value="Male" type="radio" id="test1" style="height:21px; width:21px;" required/>
      <label for="test1" style="font-size:16px;padding-left: 5px;" >Male</label>
&nbsp;&nbsp;&nbsp;
      <input name="gender[<?php echo $x;?>]" value="Female" type="radio" id="test2" style="height:21px; width:21px;" required/>
      <label for="test2" style="font-size:16px;padding-left: 5px;">Female</label>
&nbsp;&nbsp;&nbsp;
       <input name="gender[<?php echo $x;?>]" value="Others" type="radio" id="test3" style="height:21px; width:21px;" required/>
      <label for="test3" style="font-size:16px;padding-left: 5px;">Others</label>

    </div>
   </div>

<br>

<?php 
if($c[5]=='AQUACHAMP'){
?>
 <input name="size[<?php echo $x;?>]" value="" type="hidden" id="size1" style="height:21px; width:21px;"  required/>
<?php
}else{
  ?>
 <div class="row">
      <div class="col-md-12">
        <label for="size" style="color:#444343 !important;font-size:16px;">T-Shirt Size</label><br>

      <input name="size[<?php echo $x;?>]" value="XS" type="radio" id="size1" style="height:21px; width:21px;" required/>
      <label for="size1" style="font-size:16px;padding-left: 5px;" >XS</label>
&nbsp;&nbsp;&nbsp;
      <input name="size[<?php echo $x;?>]" value="S" type="radio" id="size2" style="height:21px; width:21px;" required/>
      <label for="size2" style="font-size:16px;padding-left: 5px;">S</label>
&nbsp;&nbsp;&nbsp;
       <input name="size[<?php echo $x;?>]" value="M" type="radio" id="size3" style="height:21px; width:21px;" required/>
      <label for="size3" style="font-size:16px;padding-left: 5px;">M</label>

&nbsp;&nbsp;&nbsp;
       <input name="size[<?php echo $x;?>]" value="L" type="radio" id="size4" style="height:21px; width:21px;" required />
      <label for="size4" style="font-size:16px;padding-left: 5px;">L</label>

      &nbsp;&nbsp;&nbsp;
       <input name="size[<?php echo $x;?>]" value="XL" type="radio" id="size5" style="height:21px; width:21px;" required/>
      <label for="size5" style="font-size:16px;padding-left: 5px;">XL</label>
&nbsp;&nbsp;&nbsp;
       <input name="size[<?php echo $x;?>]" value="XXL" type="radio" id="size5" style="height:21px; width:21px;" required/>
      <label for="size5" style="font-size:16px;padding-left: 5px;">XXL</label>

    </div>
   </div>

  <?php
}
?>
  


<div class="row">
        <div class="input-field col-md-6">
          <input id="city" name="city[]" type="text" class="validate" required>
          <label for="city">City</label>
        </div>

        <div class="input-field col-md-6">
          <!--
          <input id="blood" name="blood[]" type="text" class="validate" required>
          <label for="blood">Blood Group</label>
        -->

         <label for="blood"></label><br>

  <select id="blood" name="blood[]" class="form-control" require>
    <option value="">Blood Group</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
  </select>
        </div>

      </div>



      <div class="row">

        <div class="input-field col-md-12">
          <input id="emergency" name="emergency[]" type="number" value="+91" class="validate" required>
          <label for="emergency">Emergency Contact Number</label>
        </div>
      </div>
<br>
       <div class="row">

        <div class="input-field col-md-12">
          <label for="dob" style="margin-top:-5%">Date of Birth</label>
          <input id="dob" name="dob[]" type="Date" class="validate" required>
          
        </div>
      </div>



    

</div>
</div>


 <?php 
 $x++;
}

}
?>



</div>
    </div>

<?php 
}
else{
header('location:https://'.base_url().'Signin');
}
?>


    <div class="col-sm-4" data-spy="affix" data-offset-top="90" data-offset-bottom="0">

<div style="background-color: #E5E5E5;padding:18px;text-align: left;">
   
   <h3 style="color:#666666;font-size:22px;padding-bottom: 5px;">Cart Items</h3>
<hr style="border:1px solid #fff;">


  <?php

$total=0;

$tot_item=0;

$item_string='';

if(isset($_SESSION['cart'])){

foreach($_SESSION['cart'] as $c){
?>
 
<div class="row" style="color:#000;">

  <div class="col-sm-8 col-xs-8"><?php echo $c[5];?>-<?php echo $c[1];?> (<?php echo $c[3];?> items)</div>
   
   <div class="col-sm-4 col-xs-4">
    ₹<?php echo (int)$c[2]*(int)$c[3];?>
      &nbsp;&nbsp;
<a href="#" onclick="delete_from_cart('<?php echo $c[0];?>')">
<i style="color:#009fa6;" class="fa fa-times" aria-hidden="true" ></i>
</a>
    </div>

</div>

<?php

if($item_string){
  $item_string=$item_string.','.$c[1].'-'.$c[3];
}else{
  $item_string=$c[1].'-'.$c[3];
}

$tot_item=$tot_item+(int)$c[3];

$total=$total+(int)$c[2]*(int)$c[3];
}

}else{

  echo "Add Something in cart";
}


  ?>



<div class="row" style="color:#1d4c9a;margin-top:7%;font-size:18px;">

<div id="sec_promo_grp" style="display:block;">
             
            <div class="col-md-8 col-sm-8 text-success">
                <h6 class="my-0" style="font-size: 14px;">Promo code</h6>
                <small ><span id="sec_promo">(Not Available)</span></small>
              </div>
              <div class="col-md-4 col-sm-4 text-success" style="">
              <span id="sec_disc" class="text-success" style="font-size: 15px;">-Rs.0</span>
              </div>
            </div>

  <div class="col-sm-8 col-xs-8">Total Amount</div>
  <div id="fin_total_disc" class="col-sm-4 col-xs-4">₹<?php echo $total;?></div>

  <input type="hidden" id="final_amt_form" name="total" value="<?php echo $total;?>" />
  <input type="hidden" name="sub_total" value="<?php echo $total;?>" />
  
<input type="hidden" name="items" value="<?php echo $item_string;?>" />
<input type="hidden" name="merchant_order_id" value="<?php echo mt_rand(11111111,999999999);?>" />

</div>
</div>


<div class="row" style="padding:15px;">


         <div class="col-md-8 col-sm-8 col-lg-8">
              <input type="text" id="promo_code" class="form-control" name="promo_code" placeholder="Enter Coupon Code" aria-label="Recipient's username" aria-describedby="basic-addon2">

              <input type="hidden" id="promo_disc_form" class="form-control" name="promo_disc" placeholder="Promo discount" value="" aria-label="Recipient's username" aria-describedby="basic-addon2">
      
      </div>
        
        <div class="col-md-4 col-sm-4 col-lg-4 input-group-append">

    <button style="width:100%;" onclick="check_promo();" style="border-radius: 0px;color:#37BEB8;" class="btn btn-default" type="button">Apply</button>

              </div>

            </div>

<br>


<?php 
if($tot_item){
  ?>
<button type="submit" class="btn btn-default" style="margin: 0px;font-size: 16px;border: none;border-radius: 0;color: #fff;width:100%;background-color: #29b99a;">
<span style="float:left;padding-left:15px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; <?php echo $tot_item;?> 

</span>
  <span style="float:right;padding-right:15px;">PAY NOW &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>
</span></button>

<?php 
}
else{

  ?>
<a href="<?php echo base_url();?>" type="button" class="btn btn-default" style="margin: 0px;font-size: 16px;border: none;border-radius: 0;color: #fff;width:100%;background-color: #29b99a;">
<span style="float:left;padding-left:15px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; <?php echo $tot_item;?> 

</span>
  <span style="float:right;padding-right:15px;">Buy Now &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>
</span></a>
  <?php
}
?>

    </div>

 </div>
</div>

</form>

</div>

<script>

  function check_promo(){

    var promo=document.getElementById("promo_code").value;


$.post('https://<?php echo base_url("Ajax_request/check_promo");?>',
  {
    promo_code:promo
  },
  function(data,status){
var obj=JSON.parse(data);



var promo_code=obj[0].details.promo_code;
var minimum_order_amount=obj[0].details.minimum_order_amount;
var discount=obj[0].details.discount;
var discount_type=obj[0].details.discount_type;
var max_discount_amount=obj[0].details.max_discount_amount;
var for_event=obj[0].details.message;
var disc=obj[0].details.tot_discount;

if(disc==0){
  alert('Invalid Promo Code');
}else{

var sub_total=<?php echo $total;?>;

/*
var disc=sub_total*discount;
var disc=disc/100;
*/

var final_tot=(sub_total-disc);

//alert(final_tot);

alert('Promo Code Applied Successfuly');

document.getElementById("fin_total_disc").innerHTML=final_tot;
document.getElementById("final_amt_form").value=final_tot;

document.getElementById("promo_disc_form").value=disc;

document.getElementById("sec_promo").innerHTML=promo_code+' ('+discount+'%) for <br>'+for_event;
document.getElementById("sec_disc").innerHTML='-Rs.'+disc;

}

});

  }



  function delete_from_cart(id){

$.post('https://<?php echo base_url("Ajax_request/delete_cart");?>',{
id:id
},
function (data,status){
  if(data=='success'){
    location.reload();
  }
});

}
</script>
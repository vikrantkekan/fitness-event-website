



<?php 
//$user=json_decode($this->session->userdata('all_data'),true);
?>

<br>
<br>
<div class="container" >
<?php

//print_r($my_orders[0]['items'][0]['contact']);


if(isset($my_orders )){
  
foreach($my_orders as $my_ord){
  foreach($my_ord['items'] as $items){


?>


<div class="row" style="background-color:#fff;padding:20px;border: 1px solid #29b99a;">
<div class="col-sm-12 col-xs-12" style="text-align: center;">

    

 <?php
if($items['event_name']=='Apla Pune Marathon'){
    ?>
    <img src="https://<?php echo base_url();?>images/product/apal-pune-marathon.svg" style="width:10%;">
<?php
}
if($items['event_name']=='AQUACHAMP'){
    ?>
<img src="https://<?php echo base_url();?>images/product/aqua-champ.png" style="width:10%;">
    <?php
}
if($items['event_name']=='Mumbai Cyclothon'){
    ?>
<img src="https://<?php echo base_url();?>images/product/amchi-mumbai.png" style="width:10%;">
    <?php
}
?>

</div>

<div class="col-sm-12 col-xs-12" style="text-align: center;">
    
    <h2 style="color:#009FA6 !important;font-size: 16px;font-weight: 400;"><?php echo $items['event_date'];?></h2>
<hr style="border-bottom: 1px solid #000000;width:20%;">

<h1 style="color:#D83565 !important;font-size:24px;font-weight: 400;"><?php echo $items['event_name'];?></h1>

<p style="color:#009FA6 !important;font-size: 24px;font-weight: 400;"><?php echo $items['name'];?></p>
<p style="color:#666666;font-size: 18px;font-weight: 400;">( <?php echo $items['email'];?> / <?php echo $items['contact'];?> )</p>

<h1 style="color:#D83565 !important;font-size:24px;font-weight: 400;"><?php echo $items['pname'];?></h1>

<p style="color:#666666 !important;font-size: 16px;font-weight: 400;">Booking Date: <?php echo $my_ord['todate'];?></p>
<hr style="border-bottom: 1px solid #000000;width:60%;">

<div class="row">
    <div class="col-sm-5 col-xs-5">
        <p style="float: right;color:#666666;font-size: 16px;font-weight: 400;">Venue: <?php echo $items['event_venue'];?></p>
    </div>
    <div class="col-sm-2 col-xs-2">
        <i style="color:#666666;font-size: 32px;" class="fa fa-smile-o" aria-hidden="true"></i>

    </div>
    <div class="col-sm-5 col-xs-5">
     <p style="float: left;color:#666666;font-size: 16px;font-weight: 400;">Booking Id: #<?php echo $items['merch_id'];?></p>   
    </div>
</div>
<hr style="border-bottom: 1px solid #000000;width:30%;">

</div>

<div class="col-xs-12 col-sm-12" style="text-align: center;">
    
<!--
    <p style="color:#666666;font-size: 18px;font-weight: 400;"> Flag Off Time: <?php echo $items['flag_off'];?></p>

-->

<?php

if($items['qr']){
    $img=$items['qr'];
}else{
    $img=$items['merch_id'];
}
?>
    
  <img id="right_img" src="http://qr.champendurance.com/codes/<?php echo $img;?>.png" style="width:30%;"> 
<br>
  <p style="color:#666666;font-size: 18px;font-weight: 400;margin-top: 10px;"> PRICE: INR <?php echo $items['price'];?></p>
</div>


<div class="col-xs-12" style="text-align: center;">
    <hr style="border-bottom: 1px solid #000000;width:30%;">
<p style="color:#666666;font-size: 16px;font-weight: 400;">Write to us at <b>info@champendurance.com</b></p>

<button onclick="window.print();" type="button" class="btn btn-default">Print</button>

</div>

</div>



<?php
    }
}

}

?>




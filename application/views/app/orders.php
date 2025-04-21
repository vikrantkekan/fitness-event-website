<!-- Event snippet for Purchase conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-10954879995/Z5iUCLvh3tADEPvn2Oco',
      'transaction_id': ''
  });
</script>


<section class="container-fluid main-conatiner">


<?php 
//$user=json_decode($this->session->userdata('all_data'),true);
?>

<br>
<br>
<div class="container" >
<?php

if(!isset($userdata['userdata']['fname'])){
     header('location:https://'.base_url());
}

//print_r($my_orders);

if(isset($my_orders )){
  
foreach($my_orders as $my_ord){
  
  foreach($my_ord['items'] as $items){


?>

<br>


<div class="row" style="background-color:#fff;padding:20px;border: 1px solid #29b99a;">
<div class="col-sm-3" style="text-align: center;">
    <p style="font-size: 14px;color: #666666;transform: rotate(-90deg);left: -80%;position: absolute;top: 90%;">CHAMP ENDURANCE &nbsp;&nbsp;&nbsp; CHAMP ENDURANCE &nbsp;&nbsp;&nbsp; CHAMP ENDURANCE</p>

<?php
if($items['event_name']=='Apla Pune Marathon'){
    ?>
    <img src="https://<?php echo base_url();?>images/product/apal-pune-marathon.svg" style="width:70%;margin-top:60%;">
<?php
}
if($items['event_name']=='AQUACHAMP'){
    ?>
<img src="https://<?php echo base_url();?>images/product/aqua-champ.png" style="width:70%;margin-top:60%;">
    <?php
}
if($items['event_name']=='Mumbai Cyclothon'){
    ?>
<img src="https://<?php echo base_url();?>images/product/amchi-mumbai.png" style="width:90%;margin-top:60%;">
    <?php
}
?>
    

</div>

<div class="col-sm-6" style="text-align: center;border-right: 1px dashed #000000;">
    
    <h2 style="color:#009FA6;font-size: 16px;font-weight: 400;"><?php echo $items['event_date'];?></h2>
<hr style="border-bottom: 1px solid #000000;width:65%;">

<h1 style="color:#D83565;font-size:32px;font-weight: 400;"><?php echo $items['event_name'];?></h1>

<p style="color:#009FA6;font-size: 24px;font-weight: 400;"><?php echo $items['name'];?></p>

<p style="color:#666666;font-size: 18px;font-weight: 400;">( <?php echo $items['email'];?> / <?php echo $items['contact'];?> )</p>

<h1 style="color:#D83565;font-size:24px;font-weight: 400;"><?php echo $items['pname'];?></h1>

<p style="color:#666666;font-size: 16px;font-weight: 400;">Booking Date: <?php echo $my_ord['todate'];?></p>
<hr style="border-bottom: 1px solid #000000;width:90%;">

<div class="row">
    <div class="col-sm-5">
        <p style="color:#666666;font-size: 16px;font-weight: 400;">Venue: <?php echo $items['event_venue'];?></p>
    </div>
    <div class="col-sm-2">
        <i style="color:#666666;font-size: 32px;" class="fa fa-smile-o" aria-hidden="true"></i>

    </div>
    <div class="col-sm-5">
     <p style="color:#666666;font-size: 16px;font-weight: 400;">Booking Id: #<?php echo $items['merch_id'];?></p>   
    </div>
</div>
<hr style="border-bottom: 1px solid #000000;width:60%;">
<p style="color:#666666;font-size: 16px;font-weight: 400;">Write to us at <b>info@champendurance.com</b></p>

</div>

<div class="col-sm-3" style="text-align: center;">
    
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

  <img src="http://qr.champendurance.com/codes/<?php echo $img;?>.png" style="width:80%;margin-top:15%;"> 

  <p style="color:#666666;font-size: 18px;font-weight: 400;margin-top:15%;"> PRICE: INR <?php echo $items['price'];?></p>
</div>


<center>
<a href="https://<?php echo base_url();?>Print-Ticket/<?php echo $items['id'];?>/<?php echo substr($items['contact'],-10);?>" target="_blank" type="button" class="btn btn-default">Print</a>
</center>

</div>



<?php
    }
}

}

?>

<!---end card set-1-->
</div>

</section>




<div id="slider_car" class="container-fluid" style="background-color: #F2F2F2;">

</div>

<div style="background-color: #F2F2F2;">


<!-- AQUA CHAMP-2 -->
<div  class="container" style="padding-bottom:60px;letter-spacing: 1px;">
  <div class="row">

    <div class="col-sm-8">

<div style="background-color: #E5E5E5;padding:10px;text-align: center;">
   

   <h3 style="color:#666666;font-size:22px;padding-bottom: 10px;text-transform: uppercase;"><?php echo $cats[0]['name'];?></h3>

   <table class="table table-bordered">
    <thead>
      <tr>
        <th style="text-align: center;font-weight: 400;background-color: #29b99a;color:#fff;">Distance</th>
        
        <th style="text-align: center;font-weight: 400;background-color: #29b99a;color:#fff;">Fees</th>
         
      </tr>
    </thead>
    <tbody>

<?php


if($main_id==1 || $main_id==2){
  header('location:https://champendurance.com');
}

foreach($event_cat as $ev){
  $id=$ev['pid'];
  ?>

<tr style="background-color: #fff;color:#000;">
 <td><?php echo $ev['pname'];?></td>
 <td><?php echo $ev['price'];?></td>

 <td>
  <?php

if(!isset($_SESSION['cart'][$id])){
?>
  <button style="background-color: transparent !important;color:#29b99a;border:none;width:100%;" type="button" class="btn btn-primary" onclick="add_to_cart('<?php echo $id;?>','<?php echo $ev['pname'];?>','<?php echo $ev['price'];?>','1','<?php echo $ev['flagoff'];?>','<?php echo $cats[0]['name'];?>');"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button>
<?php
}
else{
?>
<center>
<div class="input-group" style="width:100px;">
         
          <span class="input-group-btn" onclick="remove_from_cart('<?php echo $id;?>','<?php echo $ev['pname'];?>','<?php echo $ev['price'];?>','1','<?php echo $ev['flagoff'];?>','<?php echo $cats[0]['name'];?>');">
              <button type="button" class="btn btn-deault btn-number"  data-type="minus" data-field="quant">
                <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>

  <input type="text" name="quant" class="form-control input-number" value="<?php echo $_SESSION['cart'][$id][3];?>" min="1" max="100" style="width:50px;">

          <span class="input-group-btn" onclick="add_to_cart('<?php echo $id;?>','<?php echo $ev['pname'];?>','<?php echo $ev['price'];?>','1','<?php echo $ev['flagoff'];?>','<?php echo $cats[0]['name'];?>');"> 
              <button type="button" class="btn btn-deault btn-number" data-type="plus" data-field="quant">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
</div>
</center>

<?php 
}
?>

</td>

</tr>
  <?php 
}

?>




      
    </tbody>
  </table>



  <script>
function add_to_cart(id,name,price,qty,flag_time,event_name){


$.post('https://<?php echo base_url("Ajax_request/add_cart");?>',{
id:id,name:name,price:price,qty:qty,flag_time:flag_time,event_name:event_name
},
function (data,status){
  
  //alert(data);

  if(data=='success'){
      
    location.reload();
  }
});

}


function remove_from_cart(id,name,price,qty,flag_time,event_name){

$.post('https://<?php echo base_url("Ajax_request/remove_cart");?>',{
id:id,name:name,price:price,qty:qty,flag_time:flag_time,event_name:event_name
},
function (data,status){
  if(data=='success'){
    location.reload();
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

</div>

    </div>

    <div class="col-sm-4">

<div style="background-color: #E5E5E5;padding:18px;text-align: left;">
   
   <h3 style="color:#666666;font-size:22px;padding-bottom: 5px;">Cart Items</h3>
<hr style="border:1px solid #fff;">

<?php

$total=0;

$tot_item=0;

if(isset($_SESSION['cart'])){

foreach($_SESSION['cart'] as $c){
?>
 
<div class="row" style="color:#000;">

  <div class="col-sm-8 col-xs-8"><?php echo $c[5];?>-<?php echo $c[1];?> (<?php echo $c[3];?> items)



  </div>
   <div class="col-sm-4 col-xs-4">
    ₹<?php echo (int)$c[2]*(int)$c[3];?>&nbsp;&nbsp;
<a href="#" onclick="delete_from_cart('<?php echo $c[0];?>')">
<i style="color:#009fa6;" class="fa fa-times" aria-hidden="true" ></i>
</a>
    </div>



</div>

<?php

$tot_item=$tot_item+(int)$c[3];

$total=$total+(int)$c[2]*(int)$c[3];
}

}
else{

  echo "Add Something in cart";
}


  ?>



<div class="row" style="color:#1d4c9a;margin-top:7%;font-size:18px;">

  <div class="col-sm-8 col-md-8 col-xs-8">Total Amount</div>
   <div class="col-sm-4 col-md-4 col-xs-4" style="float:right;">₹<?php echo $total;?></div>

</div>
</div>

<br>

<a href="https://<?php echo base_url();?>Checkout" type="button" class="btn btn-default" style="font-size: 16px;border: none;border-radius: 0;color: #fff;width:100%;background-color: #29b99a;">
<span style="float:left;padding-left:15px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; <?php echo $tot_item;?> 

</span>
  <span style="float:right;padding-right:15px;">PROCEED &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</a>

    </div>

 </div>
</div>

</div>


<div id="slider_car" class="container" style="padding:25px;">

<div style="z-index:10;position: relative;">
     <h1 style="font-weight: 400;color:#08b8bf;padding-bottom:25px;font-size:24px;letter-spacing: 3px;">Book your tickets for our other events here:</h1>
 </div>

    <div class="row">


<?php 
if($main_id!=1){

?>

<div class="col-sm-4">
<div style="border:1px solid #fff;padding:40px;text-align: center;height:325px;background-color: #08b8bf;">
<img src="https://<?php echo base_url();?>images/product/apla-pune-marathon-event.png" alt="Champ Endurance" style="width:100%;">

    <p style="font-size: 18px;color: #fff;font-weight: 400;">Apla Pune Marathon</p>
    <p style="font-size: 15px;color: #fff;font-weight: 400;">June 26<sup>th</sup>, 2022</p>
<br>
<a href="https://<?php echo base_url();?>Event/Apla-Pune-Marathon/1" type="button" class=" btn btn-md btn-default" style="background-color:#FFFFFF;border:1px solid #009FA6;color:#009FA6;border-radius:0px;width:160px;">KNOW MORE</a>
</div>
</div>
<?php 
}
if($main_id!=2){
?>
     
<div class="col-sm-4">
<div style="border:1px solid #fff;padding:40px;text-align: center;height:325px;background-color: #08b8bf;">
<img src="https://<?php echo base_url();?>images/product/aqua-champ-event.png" alt="Champ Endurance" style="width:100%;">

    <p style="font-size: 18px;color: #fff;font-weight: 400;">AQUACHAMP <br></p>
    <p style="font-size: 15px;color: #fff;font-weight: 400;">October 16<sup>th</sup>, 2022</p>
<br>

<a href="https://<?php echo base_url();?>Event/Aquachamp/2" type="button" class="btn btn-md btn-default" style="background-color:#FFFFFF;border:1px solid #009FA6;color:#009FA6;border-radius:0px;width:160px;">KNOW MORE</a>



</div>
</div>
<?php 
}
if($main_id!=3){
?>
<!--
<div class="col-sm-4">
<div style="border:1px solid #fff;padding:40px;text-align: center;height:325px;background-color: #08b8bf;">
<img src="https://<?php echo base_url();?>images/product/endura-champ.png" alt="Champ Endurance" style="width:100%;">

    <p style="font-size: 18px;color: #fff;font-weight: 400;">ENDURACHAMP</p>
    <p style="font-size: 15px;color: #fff;font-weight: 400;">October 16<sup>th</sup>, 2022</p>
<br>
<a href="https://<?php echo base_url();?>Book/Endurachamp/3" type="button" class="btn btn-md btn-default" style="background-color:#FFFFFF;border:1px solid #009FA6;color:#009FA6;border-radius:0px;width:160px;">BOOK NOW</a>

</div>
</div>
-->

<?php 
}

?>
</div>

</div>





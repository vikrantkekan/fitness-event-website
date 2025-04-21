



<!-- Container -->
<div class="container-fluid" style="ackground-color: #F2F2F2;letter-spacing: 1px;">

<div class="container" style="margin-top:3%;border-radius: 20px;background-color: #F2F2F2;padding:40px;padding-bottom:60px;letter-spacing: 1px;">
 <center>
  <h1 style="color:#000000;padding-bottom:3px;font-size:25px;letter-spacing: 2px;">Profile Details
  </h1>
</center><br><br>

<ul class="nav nav-tabs nav-justified">
  
    <li class="active"><a data-toggle="tab" href="#home">Edit Personal Details</a></li>
    <li><a data-toggle="tab" href="#menu1">Edit Address</a></li>
    
    <!--
    <li><a data-toggle="tab" href="#menu2">Change Password</a></li>
    --->

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

<center>
  <br>

<div class="col-sm-3"></div>

  <div class="col-sm-6">
<div class="form-request" style="padding:25px;">

<form action="https://<?php echo base_url();?>Profile" class="mb-0" method="post">
<div class="form-group row" style="padding:15px;">
  <div class="col-xs-12">
    <label for="ex1"></label>
    <input style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" type="text" class="form-control" name="first_name" placeholder="Your Name" value="<?php echo $userdata['userdata']['fname'];?>" required >
  </div>
  
  <div class="col-xs-12">
    <label for="ex3"></label>
    <input style="background-color:transparent;border:1px solid #a2a2a2;color:#000;" type="text" class="form-control" name="telephone" placeholder="Contact Number" value="<?php echo $userdata['userdata']['mobile'];?>" required>
  </div>
  <div class="col-xs-12">
    <label for="ex2"></label>
    <input style="background-color:transparent;border:1px solid #a2a2a2;color:#000;" type="email" class="form-control" name="email" placeholder="Your Email" value="<?php echo $userdata['userdata']['mail'];?>" required>
  </div>

  <div class="col-xs-12">
     <br>

  <button type="submit" class="btn btn-default btn-lg" style="border-radius: 0px;background-color:transparent;color:#000;border:1px solid #a2a2a2;">UPDATE NOW</button>

   </div>

</div> 

  </form>

</div></div>
</center>

    </div>

    <div id="menu1" class="tab-pane fade">

    <center>
  <br>

<div class="col-sm-3"></div>

  <div class="col-sm-6">
<div class="form-request" style="padding:25px;">

<form id="add_address_form" action="https://<?php echo base_url();?>edit_address/" method="post">
  <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:15px;">
      <input type="text" style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" class="form-control" placeholder="Full Name" name="name" value="<?php if(isset($address[0]['name'])){echo $address[0]['name'];}?>" required>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:15px;">
      <input type="text" style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" class="form-control" placeholder="Mobile Number" name="mobile" value="<?php if(isset($address[0]['name'])){echo $address[0]['mobile'];}?>" required>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:15px;">
      <input type="text" style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" class="form-control" placeholder="Address 1" name="address1" value="<?php if(isset($address[0]['name'])){echo $address[0]['house'];}?>" required>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:15px;">
      <input type="text" style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" class="form-control" placeholder="Address 2" name="address2" value="<?php if(isset($address[0]['name'])){echo $address[0]['road'];}?>" required>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:15px;">
      <input type="text" style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" class="form-control" placeholder="Landmark" name="Landmark" value="<?php if(isset($address[0]['name'])){echo $address[0]['landmark'];}?>" required>
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:15px;">
      <input type="text" style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" class="form-control" placeholder="City/ District" name="city" value="<?php if(isset($address[0]['name'])){echo $address[0]['city'];}?>" required>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:15px;">
      <input type="text" style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" class="form-control" placeholder="State" name="state" value="<?php if(isset($address[0]['name'])){echo $address[0]['state'];}?>" required>
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:15px;">
      <input type="text" style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" class="form-control" placeholder="Pin code" name="pin" value="<?php if(isset($address[0]['name'])){echo $address[0]['pin'];}?>" required>
    </div>
   

   <input type="hidden" name="type" value="Home">

    <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:15px;">


  <input type="hidden" class="form-control"  name="add_id" value="<?php if(isset($address[0]['id'])){echo $address[0]['id'];}?>" >
    



</div>
<br>

 <div class="col-xs-12">
     <br>

  <button type="submit" class="btn btn-default btn-lg" style="border-radius: 0px;background-color:transparent;color:#000;border:1px solid #a2a2a2;">UPDATE NOW</button>

   </div>

  </div>
  
</form>  

</div></div>
</center>

    </div>

    <div id="menu2" class="tab-pane fade">

  <center>
  <br>

<div class="col-sm-3"></div>

  <div class="col-sm-6">
<div class="form-request" style="padding:25px;">

<form action="enquiry_form.php" class="mb-0" method="post">
<div class="form-group row" style="padding:15px;">
  <div class="col-xs-12">
    <label for="ex1"></label>
    <input style="background-color:transparent;border:1px solid #a2a2a2;color:#333;" type="password" class="form-control" name="first_name" placeholder="Old Password" required >
  </div>
  
  <div class="col-xs-12">
    <label for="ex3"></label>
    <input style="background-color:transparent;border:1px solid #a2a2a2;color:#000;" type="password" class="form-control" name="telephone" placeholder="New Password" required>
  </div>
  <div class="col-xs-12">
    <label for="ex2"></label>
    <input style="background-color:transparent;border:1px solid #a2a2a2;color:#000;" type="password" class="form-control" name="email" placeholder="Confirm New Password" required>
  </div>

  <div class="col-xs-12">
     <br>

  <button type="submit" class="btn btn-default btn-lg" style="border-radius: 0px;background-color:transparent;color:#000;border:1px solid #a2a2a2;">UPDATE NOW</button>

   </div>

</div> 

</form>

</div></div>
</center>

    </div>
 
  </div>

</div>
    

</div>




<!-- #banner3 end -->


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >



<nav class="dnt_show_mbl navbar navbar-default navbar-fixed-top" style="background-color: #fff !important;">

  <div class="" style="width:100%;">
    <div class="navbar-header" style="">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand dnt_show_mbl" href="index.html" style="margin-left:90%;">
        <img src="https://<?php echo base_url();?>images/logo.svg"  alt="Champ endurance" style="margin-left: 30%;width:65px;">
      </a>
      
      <a class="navbar-brand dontdisplaylg" href="index.html" style="" alt="Champ endurance">
        <img src="https://<?php echo base_url();?>images/logo.svg" >
      </a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar" style="">


      
      <ul class="nav navbar-nav navbar-right" style="margin-top: 4px;margin-right: 200px;padding:15px;letter-spacing:1px;color:#3A3A3A;">

<li>
          <a href="https://<?php echo base_url();?>" style="font-size:12px;">HOME</a></li>





 <li class="dropdown-header" style="margin-top:-3px;">
        
        <a style="font-size:12px;" class="dropdown-toggle" href="#" data-toggle="dropdown">EVENTS
        <span class="caret"></span></a>

        
        <ul class="desk_drop dropdown-menu">
         
          <li><a href="https://<?php echo base_url();?>Event/Aquachamp/2">Aqua Champ</a></li><br>
          <li><a href="https://<?php echo base_url();?>Event/Mumbai-Cyclothon/4">Mumbai Cyclothon</a></li><br>
          <li><a href="https://<?php echo base_url();?>Event/Apla-Pune-Marathon/1">Apla Pune Marathon</a></li><br>
          <!--
          <li><a href="https://<?php echo base_url();?>Event/Endurachamp/3">Endura Champ</a></li>
          -->
        </ul>

        </li>

<li>
    <a href="https://<?php echo base_url();?>About" style="font-size:12px;">ABOUT US</a>
  </li>




<li>
  <a href="https://<?php echo base_url();?>home/stories" style="font-size:12px;">STORIES</a>
</li>



<!--
  <li>
  <a href="https://<?php echo base_url();?>home/services" style="font-size:12px;">SERVICES</a>
</li>
--->





<script>
function on_menu(){
$(".dropdown-header:first").addClass("open");
}

function out_menu(){
$(".dropdown-header:first").removeClass("open");
}


</script>

  

<?php if(isset($userdata['userdata']['fname'])){

  ?>

 <li class="dropdown-header" style="margin-top:-3px;margin-left:-3%;">
        
        <a style="font-size:14px;" class="dropdown-toggle" href="#" data-toggle="dropdown"><img src="https://<?php echo base_url();?>images/icon/signin.svg" > <?php echo $userdata['userdata']['fname'];?>
        <span class="caret"></span></a>

        
        <ul class="desk_drop dropdown-menu">
          <li><a href="https://<?php echo base_url();?>Bookings">My Bookings</a></li><br>
          <li><a href="https://<?php echo base_url();?>Profile">My Profile</a></li><br>
          <li><a href="https://<?php echo base_url();?>Logout">Logout</a></li>
        </ul>

        </li>

<!--
<li class="dropdown-header" style="margin-top:-3px;margin-left:-3%;" onmouseout="out_menu();" onmouseover="on_menu();">
        
        <a style="font-size:14px;" class="dropdown-toggle" href="Projects.html"><img src="https://<?php echo base_url();?>images/icon/signin.svg" > <?php echo $userdata['userdata']['fname'];?>
        <span class="caret"></span></a>

        
        <ul class="desk_drop dropdown-menu">
          <li><a href="https://<?php echo base_url();?>Bookings">My Bookings</a></li><br>
          <li><a href="https://<?php echo base_url();?>Profile">My Profile</a></li><br>
          <li><a href="https://<?php echo base_url();?>Logout">Logout</a></li>
        </ul>

        </li>
-->
        <?php
}else{

?>

<li><a href="https://<?php echo base_url();?>Signin" style="font-family: Inter !important;">
  <img src="https://<?php echo base_url();?>images/icon/signin.svg" ></a></li>
<?php
}
?>







<script>
function on_menu(){
$(".dropdown-header:first").addClass("open");
}

function out_menu(){
$(".dropdown-header:first").removeClass("open");
}
</script>


<li><a href="https://<?php echo base_url();?>Checkout" style="font-family: Inter !important;">
 <?php 
  if(!isset($_SESSION['cart'])){
?>
  <img src="https://<?php echo base_url();?>images/icon/cart.svg" > </a> 
  <?php 
}else{
  ?>
 <img src="https://<?php echo base_url();?>images/icon/cart-fill.svg" > </a> 
  <?php
}
?>
</li>


<?php 
if(isset($mainid)){

  if($mainid==2){
  ?>

<li>
    <a href="https://staahmax.staah.net/be/indexpackdetail?propertyId=MjA2Mw==&individual=true" style="font-size:12px;" target="_blank">BOOK YOUR STAY</a>
  </li>
  <?php
}
    
    if($mainid==1 || $mainid==2){
        ?>
     <li>
   <a href="#" type="button" style="padding: 7px 18px;background-color:#E01C66 !important; color:#fff !important;margin-top:4%;border-radius: 5px;border: solid 1px #E01C66;font-size:14px;font-weight:500;margin-right:25px;"><span class="hov" style="color:#fff">SOLD OUT</span></a>
    </li>   
        <?php
    }
    else{
?>
<li>
   <a href="https://<?php echo base_url();?>Book/<?php echo $url;?>/<?php echo $mainid;?>" type="button" style="padding: 7px 18px;background-color:#E01C66 !important; color:#fff !important;margin-top:4%;border-radius: 5px;border: solid 1px #E01C66;font-size:14px;font-weight:500;margin-right:25px;"><span class="hov" style="color:#fff">BOOK NOW</span></a>
    </li>
<?php 

}

}

?>

     </ul>
     </div>
  </div>
</nav>


<script>
/*
    $(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 120){
            $(".navbar").css({"background-color":"#fff"});   
        }
        else{
            $(".navbar").css({"background-color":"transparent"});
        }

    })
})
*/
</script>



<nav class="dontdisplaylg navbar navbar-default navbar-fixed-top" style="height:70px;">
  <div class="container" style="width:100%;">
    <div class="navbar-header" style="">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
        <span class="icon-bar" style="background-color: #888;"></span>
        <span class="icon-bar" style="background-color: #888;"></span>
        <span class="icon-bar" style="background-color: #888;"></span>                        
      </button>

      <a class="navbar-brand dnt_show_mbl" href="index.html" style="margin-left:45%;margin-top:7%;">
        <img src="https://<?php echo base_url();?>images/logo.svg" style="width: 50px;"  alt="Champ Endurance">
      </a>
      
      <a class="navbar-brand dontdisplaylg" href="index.html" style="" >
        <img src="https://<?php echo base_url();?>images/logo.svg" style="width: 50px;" alt="Champ Endurance">
      </a>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar2" style="background-color: #fff;">


      
      <ul class="nav navbar-nav navbar-right" style="margin-top: 4px;margin-right: 200px;padding:15px;letter-spacing:1px;color:#3A3A3A;">

<li>
          <a href="https://<?php echo base_url();?>" style="font-size:12px;">HOME</a></li>

        <li>
          <a href="https://<?php echo base_url();?>About" style="font-size:12px;">ABOUT US</a></li>


<li class="dropdown-header" style="margin-top:-3px;margin-left: -3px;">
        
        <a style="font-size:12px;" class="dropdown-toggle" href="#" data-toggle="dropdown">EVENTS
        <span class="caret"></span></a>

        
        <ul class="desk_drop dropdown-menu">
            <li><a href="https://<?php echo base_url();?>Event/Aquachamp/2">Aqua Champ</a></li><br>
          <li><a href="https://<?php echo base_url();?>Event/Mumbai-Cyclothon/4">Mumbai Cyclothon</a></li><br>
        
         <li><a href="https://<?php echo base_url();?>Event/Apla-Pune-Marathon/1">Apla Pune Marathon</a></li><br>
        
       
          
          
        </ul>

        </li>

<li>
  <a href="https://<?php echo base_url();?>?#stories" style="font-size:12px;">STORIES</a>
</li>


  

<?php if(isset($userdata['userdata']['fname'])){
  ?>


        <li class="dropdown-header" style="margin-top:-3px;margin-left:-3%;">
        
        <a style="font-size:14px;" class="dropdown-toggle" href="#" data-toggle="dropdown"><img src="https://<?php echo base_url();?>images/icon/signin.svg" > <?php echo $userdata['userdata']['fname'];?>
        <span class="caret"></span></a>

        
        <ul class="desk_drop dropdown-menu">
          <li><a href="https://<?php echo base_url();?>Bookings">My Bookings</a></li><br>
          <li><a href="https://<?php echo base_url();?>Profile">My Profile</a></li><br>
          <li><a href="https://<?php echo base_url();?>Logout">Logout</a></li>
        </ul>

        </li>

        <?php
}
else{

?>

<li><a href="https://<?php echo base_url();?>Signin" style="font-family: Inter !important;">
  <img src="https://<?php echo base_url();?>images/icon/signin.svg" ></a></li>
<?php
}
?>





<?php 
if(isset($mainid)){
    
     if($mainid==1 || $mainid==2){
        ?>
     <li>
   <a href="#" type="button" style="padding: 7px 18px;background-color:#E01C66 !important; color:#fff !important;margin-top:4%;border-radius: 5px;border: solid 1px #E01C66;font-size:14px;font-weight:500;margin-right:25px;"><span class="hov" style="color:#fff">SOLD OUT</span></a>
    </li>   
        <?php
    }
    else{
?>
<li>
   <a href="https://<?php echo base_url();?>Book/<?php echo $url;?>/<?php echo $mainid;?>" type="button" style="padding: 7px 18px;background-color:#E01C66 !important; color:#fff !important;margin-top:4%;border-radius: 5px;border: solid 1px #E01C66;font-size:14px;font-weight:500;margin-right:25px;"><span class="hov" style="color:#fff">BOOK NOW</span></a>
    </li>
<?php 
}
}
?>

      </ul>
    </div>
 
  
  
  </div>
</nav>






 <!-- Modal -->
  <div class="modal fade auto_load" id="enquiry_model" role="dialog">
    <div class="modal-dialog" style="margin-top:100px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           
           <center>
          <h3 style="line-height: 25px">Become an Authorized BookSeller with BookStation <br> <small style="color: grey">Just enter your details</small></h3>
        </center>

        </div>
        <div class="modal-body">
          
          <div class="row">
            <form id="down_quick" action="quick_enquiry_form.php" class="mb-0" method="post">

    <div class="form-group row" style="padding:15px;padding-top:5px;">
 
  <div class="col-xs-6">
    <label for="ex1"></label>
    <input type="text" class="form-control" name="first_name" placeholder="Your Name" required >
  </div>
    <div class="col-xs-6">
    <label for="ex1"></label>
    <input type="text" class="form-control" name="business_name" placeholder="Business Name" required >
  </div>

  <div class="col-xs-6">
    <label for="ex3"></label>
    <input type="text" class="form-control" name="telephone" id="tephone_quick" placeholder="Contact Number" required>
  </div>
  <div class="col-xs-6">
    <label for="ex2"></label>
    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
  </div>


<div class="col-xs-12">
    <br>
     <button type="submit" class="btn btn-default btn-lg" style="padding: 10px 24px;border-radius: 20px; background-color: #057197;color:#fff;">SUBMIT</button>
  </div>
  
</div>

</form>

   </div>
      
        </div>
        
      </div>
      
    </div>
  </div>
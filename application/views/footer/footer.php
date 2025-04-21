<!-- Contact Section -->


<div id="contact" class="container-fluid" style="position: relative;z-index: 99999;background-color:#464646;padding-top:60px;padding-bottom:60px;">
 
<div class="container" >
   <div class="row">

  <div class="col-sm-2 col-xs-6">
       <h3 style="font-size:20px;color:#FFFFFF;">Quick Links</h3><br>

<li><a href="#" style="color:#FFFFFF;font-size: 14px;">Careers</a></li>


<!--
  <li><a href="#" style="color:#FFFFFF;font-size: 14px;">FAQs</a></li>
<li><a href="https://<?php echo base_url();?>FAQ" style="color:#FFFFFF;font-size: 14px;">FAQs</a></li>
--->

<li><a href="https://<?php echo base_url();?>#stories" style="color:#FFFFFF;font-size: 14px;">Stories</a></li>
<li><a href="https://<?php echo base_url();?>Privacy" style="color:#FFFFFF;font-size: 14px;">Privacy Policy</a></li>
<li><a href="https://<?php echo base_url();?>TermsofServices" style="color:#FFFFFF;font-size: 14px;">Terms Of Services</a></li>


<li><a href="https://<?php echo base_url();?>Return-Refund" style="color:#FFFFFF;font-size: 14px;">Return & Refund Policy</a></li>
  </div>

     


  <div class="col-sm-4 col-xs-12" style="padding-bottom: 30px;">
         
    <h3 style="font-size:20px;color:#FFFFFF;">Corporate Address</h3><br>
<p style="color:#fff;">101, Saniket House, Prabhat Road, Pune - 411004</p>
<p><a href="tel:+919082355787" style="color:#FFFFFF;font-size: 16px;">+91 90823 55787</a></p>
<p><a href="mailto:info@champendurance.com" style="color:#FFFFFF;font-size: 16px;">info@champendurance.com</a></p>

 <h3 style="font-size:18px;color:#FFFFFF;">Connect With Us</h3>

<a href="https://www.facebook.com/champendurance" target="_blank"><img src="https://<?php echo base_url();?>images/icon/f.svg"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.instagram.com/accounts/login/?next=/champendurance/" target="_blank">
<img src="https://<?php echo base_url();?>images/icon/i.svg"></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.youtube.com/channel/UClKjHJ7P8vy12gVWRU5ilug/featured" target="_blank">
<img src="https://<?php echo base_url();?>images/icon/y.svg"></a>&nbsp;&nbsp;&nbsp;&nbsp;

<a href="https://www.linkedin.com/company/champ-endurance/" target="_blank">
<img src="https://<?php echo base_url();?>images/icon/linkedin.svg"></a>&nbsp;&nbsp;&nbsp;&nbsp;



 </div>



<div class="col-sm-1 col-xs-12"></div>
  <div class="col-sm-5 col-xs-12">

 

<div class="form-request" style="padding:25px;background-color: #FFFFFFE5;">
<h3 style="font-size:20px;color:#464646;">Contact us</h3>

<form action="https://<?php echo base_url();?>enquiry_form" class="mb-0" method="post">
<div class="form-group row" style="padding:15px;">
  <div class="col-xs-6">
    <label for="ex1"></label>
    <input style="background-color:transparent;border:1px solid #333;color:#333;" type="text" class="form-control" name="first_name" placeholder="Your Name" required >
  </div>
  
  <div class="col-xs-6">
    <label for="ex3"></label>
    <input style="background-color:transparent;border:1px solid #333;color:#000;" type="text" class="form-control" name="telephone" placeholder="Contact Number" required>
  </div>
  <div class="col-xs-12">
    <label for="ex2"></label>
    <input style="background-color:transparent;border:1px solid #333;color:#000;" type="email" class="form-control" name="email" placeholder="Your Email" required>
  </div>
  <div class="col-xs-12">
    <label for="ex1"></label>
   <textarea style="background-color:transparent;border:1px solid #333;color:#000;" class="form-control" name="message" rows="3" placeholder="Your Message"></textarea>
  </div>

  <div class="col-xs-12">
     <br>
  <button type="submit" class="btn btn-default btn-lg" style="border-radius: 0px;background-color:transparent;color:#000;border:1px solid #333;">SUBMIT NOW</button>
   </div>

</div> 

  </form>

</div>

       </div>
   </div>

</div>
  </div>


<!--

    <div class="down_enquiry visible-xs dontdisplaylg" style="align-items: center;">

<div class="row">
  <div class="col-xs-6 col-md-6 col-sm-6" style="height:50px;border-right: 1px solid #fff;"> <center>
      <a style="color: #fff !important;align-content: center;display:grid;margin-top:10px;" href="#" data-toggle="modal" data-target="#enquiry_model" class="popup-with-zoom-anim text-center">
        <img src="app-store-2.png" style="width:85%;padding-left: 20px;"></a></center></div>
      
   <div class="col-xs-6 col-md-6 col-sm-6" style="height:50px;height:50px;border-left: 1px solid #fff;"> <center>
  <a style="color: #fff !important;align-content: center;display:grid;margin-top:10px;margin-left:2%;" href="#" class="text-center"><img src="play-store-2.png" style="width:100%;padding-right: 20px;"> </a></center></div>
</div>

</div>
    --->



<footer class="container-fluid text-center" style="background-color:#212930;padding: 10px;color:#fff;">
  
  <p class="dnt_show_mbl" style="padding-left:50px;text-align:left;"> <span>&copy;2022 &nbsp;All Rights Reserved </span>
    <span style="padding-right:50px;float:right">Developed and Managed By <a href="https://3dotsdesign.in" style="color:#fff;">&nbsp;&nbsp;3Dots Design Pvt. Ltd.</a> </span>

  </p>

  

</footer>


<script src="plugin/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script>
$(document).ready(function(){

 //left animation
 
  $(window).scroll(function() {
    $(".slideanim_l").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 400) {
      $(this).addClass("slide_l");
         
        }
    });
  }); 

 //right animation
    $(window).scroll(function() {
    $(".slideanim_r").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 400) {
      $(this).addClass("slide_r");
         
        }
    });
  }); 




  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>


<html>
 <head>
  <title></title>
 
 <style>
   #length{
    
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    border: 1px solid #000;
    border-radius: 5px;
    font-family: sans-serif;
    font-weight: 400;

   }
 </style>

 </head>
 <body>

 </body>
</html>
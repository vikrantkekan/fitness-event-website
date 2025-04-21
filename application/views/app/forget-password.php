<style>


.form-control {
  font-size: 15px;
}
.form-control, .form-control:focus, .input-group-text {
  border-color: #e1e1e1;
}
.form-control, .btn {        
  border-radius: 3px;
}
.signup-form {
  width: 400px;
  margin: 0 auto;
  padding: 30px 0;    
}
.signup-form form {
  color: #999;
  border-radius: 3px;
  margin-bottom: 15px;
  background: #fff;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  padding: 30px;
}
.signup-form h2 {
  color: #333;
  font-weight: bold;
  margin-top: 0;
}
.signup-form hr {
  margin: 0 -30px 20px;
}
.signup-form .form-group {
  margin-bottom: 20px;
}
.signup-form label {
  font-weight: normal;
  font-size: 15px;
}
.signup-form .form-control {
  min-height: 38px;
  box-shadow: none !important;
} 
.signup-form .input-group-addon {
  max-width: 42px;
  text-align: center;
} 
.signup-form .btn, .signup-form .btn:active {        
  font-size: 16px;
  font-weight: bold;
  background: #19aa8d !important;
  border: none;
  min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
  background: #179b81 !important;
}
.signup-form a {
  color: #fff;  
  text-decoration: underline;
}
.signup-form a:hover {
  text-decoration: none;
}
.signup-form form a {
  color: #19aa8d;
  text-decoration: none;
} 
.signup-form form a:hover {
  text-decoration: underline;
}
.signup-form .fa {
  font-size: 21px;
}
.signup-form .fa-paper-plane {
  font-size: 18px;
}
.signup-form .fa-check {
  color: #fff;
  left: 17px;
  top: 18px;
  font-size: 7px;
  position: absolute;
}
</style>

<section class="container-fluid main-conatiner" style="background-image:url('https://<?php echo base_url();?>images/bg.jpg');background-repeat: no-repeat;background-size: cover; margin-top:80px;">

<br><br>
 


<div class="signup-form">
    <form action="https://<?php echo base_url();?>change-password" method="post">
    <h2>Forgot Password</h2>
    <p>Please enter your registered mobile number</p>

    <p style="color:green;">
      <?php 
      echo $this->session->flashdata('success');
      if(isset($userdata)){
        header('location:https://'.base_url());
      } 
      ?>
    </p>
    <p style="color:red;">
      <?php echo $this->session->flashdata('error'); ?>
    </p>
    <hr>


     
        <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">
          <span class="input-group-text">
            <span class="fa fa-phone"></span>
          </span>                    
        </div>
        <input type="number" id="mobile" class="form-control" name="mobile" placeholder="Mobile Number" required="required">
      </div>
        </div>

<input type="hidden" id="gen_otp" class="form-control" name="gen_otp" placeholder="" >

       
    <div class="form-group" id="otp" style="display:none">
      <div class="input-group">
        <div class="input-group-addon">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
          </span>                    
        </div>
        <input type="text" class="form-control" id="ent_otp" name="otp" placeholder="Enter OTP" required="required" onblur="verify_otp(this.value);">
      </div>
    </div>


    <div class="form-group" id="password" style="display:none">
      <div class="input-group">
        <div class="input-group-addon">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
          </span>                    
        </div>
        <input type="text" class="form-control" name="password" placeholder="Enter New Password" required="required">
      </div>
    </div>
   
      
        <div class="form-group" id="get_otp" style="display:block">
            <button id="my_btn" onclick="get_otp_func();" type="button" class="btn btn-primary btn-lg" style="background-color: #e01c66 !important;">GET OTP</button>
        </div>

        <span id="instr" style="display: none;">Resend OTP after 2 Minutes</span>

        <div class="form-group" id="verify_otp" style="display:none">
            <button type="submit" class="btn btn-primary btn-lg" style="background-color: #e01c66 !important;">SUBMIT</button>
        </div>

    </form>
  <div class="text-center" style="color:#fff;">Don't have an account? <a href="https://<?php echo base_url();?>Signup">Sign Up here</a></div>
</div>



</section>


<br></br>


<script>



function myFunction() {
  document.getElementById("get_otp").style.display='block';

  document.getElementById("my_btn").innerHTML='RESEND OTP';
}

 function get_otp_func(){

setTimeout(myFunction, 120000);

  var mob=document.getElementById('mobile').value;
  document.getElementById('mobile').readOnly =true;

$.post('https://<?php echo base_url("Ajax_request/get_otp");?>',{
mobile:mob
},
function (data,status){
 document.getElementById("gen_otp").value=data;
document.getElementById('get_otp').style.display ="none";
document.getElementById('otp').style.display ="block";
document.getElementById('instr').style.display ="block";


 
});

}


function verify_otp(v){
   var gen_otp=document.getElementById('gen_otp').value;
  if(gen_otp==v){

document.getElementById("get_otp").style.display='none';
document.getElementById('ent_otp').readOnly =true;
document.getElementById('password').style.display ="block";
document.getElementById('verify_otp').style.display ="block";

  }
  else{
    alert("Invalid OTP");
    document.getElementById('ent_otp').value='';
  }
}


</script>

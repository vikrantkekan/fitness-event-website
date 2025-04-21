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

<section class="container-fluid main-conatiner" style="">

<br><br>
 

<div class="signup-form">
    <form action="https://<?php echo base_url();?>View-Ticket/" method="post">
    <h2>For Download Ticket</h2>
    <p>Please Verify Your Mobile Number</p>

    <p style="color:green;">
      <?php 
      echo $this->session->flashdata('success');
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

        <input type="hidden" class="form-control" name="tickid" placeholder="" required="required" value="<?php echo $id;?>">
        <input type="number" class="form-control" name="mobile" placeholder="Mobile Number" required="required">
      </div>
        </div>


       
 
   
      
    <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" style="background-color: #e01c66 !important;">Submit</button>
<br><br>
           
        </div>

    </form>
  <div class="text-center" style="color:#fff;">Don't have an account? <a href="https://<?php echo base_url();?>Signup">Sign Up here</a></div>
</div>



</section>


<br></br>


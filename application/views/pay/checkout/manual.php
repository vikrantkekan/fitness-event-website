

<body onload="on_body();">

<center>
    <div style="margin-top:20%;padding-bottom:100px;">
<button id="rzp-button1">Pay Now</button>

<a type="button" href="../index.html" >Cancel</a>
</div>
</center>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<form name='razorpayform' action="https://<?php echo base_url();?>verify" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>

<?php 

$dec_json=json_decode($json,true);

echo $merchant_order_id;

?>

<script>
// Checkout details as a json
var options = <?php echo $json?>;


/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */

options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();

};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}

</script>


<script>

function on_body(){


  document.getElementById("rzp-button1").click();
    
}
</script>

</body>


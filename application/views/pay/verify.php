<?php



require('config.php');

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";



if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}


if ($success === true)
{

    $dat=$api->payment->fetch($_POST['razorpay_payment_id']);


//print_r($dat);

$_SESSION['raz_pay_id']=$_POST['razorpay_payment_id'];

    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";


header('location:https://'.base_url().'Pay/Success2');

}
else
{
    $html = "<script>alert('Payment Failed');</script><p>Your payment failed</p>
             <br>";

    $html = "<a href='../checkout.php'>Try Again</a>";

}


echo "Wait, We are Processing Your Payment";

echo $html;


//print_r($_SESSION['all_data']);


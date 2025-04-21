<?php


require('config.php');
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);



//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//


$total=(int)$_POST['total']*100;
$items=$_POST['items'];
$merchant_order_id=$_POST['merchant_order_id'];


$names=$_POST['full_name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$size=$_POST['size'];
$city=$_POST['city'];
$blood=$_POST['blood'];
$emergency=$_POST['emergency'];
$dob=$_POST['dob'];



//$_SESSION['userdetails']=$all_data;

$receipt=mt_rand(111111,999999);

$orderData = [
    'receipt'         => $receipt,
    'amount'          => $total, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];



$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];



$_SESSION['razorpay_order_id'] = $razorpayOrderId;




$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'manual';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Champ Endurance",
    "description"       => "Champ Endurance",
    "image"             => "https://".base_url()."images/logo.svg",
    "prefill"           => [
    "name"              => $names[0],
    "email"             => $email[0],
    "contact"           => $contact[0],
    ],
    "notes"             => [
    "name"           => $names[0],       
    "merchant_order_id" => $merchant_order_id,
    "item_list"=>$items,
    "userdet"=>$_POST,
    ],
    "theme"             => [
    "color"             => "#29b99a"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}



$json = json_encode($data);

require("checkout/{$checkout}.php");

$all_data=json_encode($_POST);

$_SESSION['all_data']=$all_data;




?>


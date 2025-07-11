<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<?php

$id = $_POST['id'];
$name = $_POST['pro_name'];
$price = $_POST['pro_price'];

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
$api_key = 'rzp_test_StooU4LPR0wb4q';
$api_secret = 'AHJFmPaKMKBrDc7DJrCCzWH0';
$api = new Api($api_key, $api_secret);

// Create an order
$order = $api->order->create([
    'amount' => $price, // amount in paise (100 paise = 1 rupee)
    'currency' => 'INR',
    'receipt' => 'order_receipt_'.time(),
]);
// Get the order ID
$order_id = $order->id;
$callback_url = "success.html";
// Create a payment button with Checkout.js
// Add a script to handle the payment
echo '<script>
    function startPayment() {
        var options = {
            key: "' . $api_key . '",
            amount: ' . $order->amount . ',
            currency: "' . $order->currency . '",
            name: "VIT TECH SOLUTION",
            description: "'.$name.'",
            image: "https://cdn.razorpay.com/logos/GhRQcyean79PqE_medium.png",
            order_id: "' . $order_id . '",
            theme:
            {
                "color": "skyblue"
            },
            callback_url: "' . $callback_url . '"
        };
        var rzp = new Razorpay(options);
        rzp.open();
    }
    startPayment();
</script>';
?>

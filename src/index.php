<?php
// Include the Razorpay PHP library
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Initialize Razorpay with your key and secret
$api_key = 'rzp_test_StooU4LPR0wb4q';
$api_secret = 'AHJFmPaKMKBrDc7DJrCCzWH0';

$api = new Api($api_key, $api_secret);
// Create an order
$order = $api->order->create([
    'amount' => 9900, // amount in paise (100 paise = 1 rupee)
    'currency' => 'INR',
    'receipt' => 'order_receipt_'.time()
]);
// Get the order ID
$order_id = $order->id;

// Set your callback URL
$callback_url = "success.html";

// Include Razorpay Checkout.js library
echo '<script src="https://checkout.razorpay.com/v1/checkout.js"></script>';

// Create a payment button with Checkout.js
?>

<button onclick="startPayment()">Pay with Razorpay</button>

<?php
// Add a script to handle the payment
echo '<script>
    function startPayment() {
        var options = {
            key: "' . $api_key . '",
            amount: ' . $order->amount . ',
            currency: "' . $order->currency . '",
            name: "VIT",
            description: "Fulstack Web Development Course",
            image: "../static/logo/vit.jpg",
            order_id: "' . $order_id . '",
            theme:
            {
                "color": "cyan"
            },
            callback_url: "' . $callback_url . '"
        };
        var rzp = new Razorpay(options);
        rzp.open();
    }
</script>';
?>

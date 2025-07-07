<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<?php
    $conn = mysqli_connect("localhost", "root", "", "ecom");
    $query = "SELECT * FROM `products`";
    $run = mysqli_query($conn, $query);
    // Include the Razorpay PHP library
    require('src/Razorpay.php');

    use Razorpay\Api\Api;

    // Initialize Razorpay with your key and secret
    $api_key = 'rzp_test_StooU4LPR0wb4q';
    $api_secret = 'AHJFmPaKMKBrDc7DJrCCzWH0';

    $api = new Api($api_key, $api_secret);
    // Include Razorpay Checkout.js library

    // Create a payment button with Checkout.js
    ?>
    <div style="display: flex;justify-content:space-around;text-align:center;">
        <?php while ($data = mysqli_fetch_assoc($run)) { ?>
            <div style="height:300px;width:300px;border:2px solid">
                <p><b>title : </b> <?php echo $data['pro_name'] ?></p>
                <p><b>price : </b> <?php echo $data['pro_price'] ?> </p>
                <p><button onclick="createOrder()">Pay with Razorpay</button></p>
                <p><button onclick="startPayment()">Pay with Razorpay</button></p>
            </div>
        <?php } ?>
    </div>
    
    
    <?php
    $title = $_POST["title"];
    $price = $_POST["price"];
    
    echo "<script>
        function createOrder(){            
            $order = $api->order->create([
                'amount' => , // amount in paise (100 paise = 1 rupee)
                'currency' => 'INR',
                'receipt' => 'order_receipt_'.time()
            ]);            
            $order_id = $order->id;            
            $callback_url = 'success.html';
        }
    </script>";

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
<body align="center">
    <h3>Forgot Password</h3>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <p><input type="text" name="otp" placeholder="Enter OTP"></p>
        <p><input type="text" name="pwd" placeholder="Enter Your pwd"></p>
        <p><input type="text" name="c_pwd" placeholder="Enter Your C_pwd"></p>
        <p><input type="submit" value="Change" name="change_password"></p>
    </form>
</body>

<?php
    $conn = mysqli_connect("localhost","root","","3pm");

    if(isset($_POST['change_password']) && $_POST['pwd']===$_POST['c_pwd']){
        $otp = $_POST['otp'];
        $pwd = $_POST['pwd'];
        $query = "UPDATE `users` SET `pwd`='$pwd' WHERE `otp` = '$otp'";
        mysqli_query($conn,$query);
        header("Location:login.php");
    }
    else{
        echo "Enter Valid Confirm Password";
    }
?>
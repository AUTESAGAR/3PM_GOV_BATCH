<?php
    error_reporting(0);
    session_start();
    $conn = mysqli_connect("localhost","root","","3pm");
    $r;
    
    if(isset($_GET['otp'])){
        $otp = $_GET['otp'];
        $query = "UPDATE `users` SET `otp`=NULL WHERE `otp` = '$otp'";
        mysqli_query($conn,$query);
        echo "OTP UPDATE";
        header("Location:forgot.php");
    }
    if(isset($_POST['change_password']) && $_POST['pwd']===$_POST['c_pwd'] && $_POST['otp']){
        $otp = $_POST['otp'];
        $pwd = $_POST['pwd'];
        try{
            $query = "UPDATE `users` SET `pwd`='$pwd',`otp` = NULL WHERE `otp`='$otp'";
            mysqli_query($conn,$query);
            header("Location:login.php");
        }
        catch (Exception $error) {
            echo "Error: {$error->getMessage()}";
            $r = "OTP Already Expired";
        }
    }
    else if(isset($_POST['change_password'])){
        echo "Enter Valid Confirm Password";
    }
?>

<body align="center">
    <h3>Forgot Password</h3>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <p><input type="text" name="otp" placeholder="Enter OTP"></p>
        <p><input type="text" name="pwd" placeholder="Enter Your pwd"></p>
        <p><input type="text" name="c_pwd" placeholder="Enter Your C_pwd"></p>
        <p><input type="submit" value="Change" name="change_password"></p>
        <p><?php echo $r; ?></p>
    </form>
    <script>
        setTimeout(()=>{
            alert("Your Otp Has Been Expired");
            window.location.replace("http://localhost/3PM_GOV_BATCH/Forgot_Password/change_password.php?otp=<?php echo $_SESSION['otp']; ?>")
        },600000);
    </script>
</body>
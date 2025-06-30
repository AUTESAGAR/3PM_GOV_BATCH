<?php
    error_reporting(0);
    session_start();

    if($_SESSION['id']){
        header("Location:index.php");
    }

    $r = "";
    $conn = mysqli_connect("localhost","root","","3pm");
    if(isset($_POST['login']) && $_POST['uname'] && $_POST['pwd'])
    {
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $query = "SELECT * FROM `users` WHERE `uname`='$uname'";
        $run = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($run);
        if($data['uname']!==$uname){
            $r = "User Does Not Exist";
        }
        else if($data['pwd']!==$pwd){
            $r = "Enter Valid Credentials";
        }
        else{
            $r = "Login Success";
            $update_id = $_SESSION['id'] = $data['id'];
            $query="UPDATE `users` SET `logs`='$update_id' WHERE `id`='$update_id'";
            mysqli_query($conn,$query);
            header("refresh:1,url=index.php");
        }
    }    
?>
<center>
    <form action="" method="post">
        <h3>Sign In</h3>
        <p><input type="text"   name="uname" id="uname" placeholder="Enter Enter Your uname"></p>
        <p><input type="text"   name="pwd" id="pwd" placeholder="Enter Enter Your pwd"></p>        
        <p><?php echo $r; ?></p>
        <p><input type="submit" name="login" id="submit" value="Login"></p>
    </form>
</center>
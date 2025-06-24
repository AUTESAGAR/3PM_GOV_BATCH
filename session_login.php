<?php 
    session_start();
    if($_COOKIE['PHPSESSID'] && $_SESSION['uname']==""){
        header("Location:session_reg.php");
    }    
?>
<center>
    <h3>Login Account</h3>
    <form action="" method="post">        
        <p><input type="text" name="uname" id="uname" placeholder="Enter Your username"></p>
        <p><input type="text" name="pwd" id="pwd" placeholder="Enter Your password"></p>
        <p><input type="submit" value="Login" name="login"></p>
    </form>
</center>

<?php
    if(isset($_POST['login'])){
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        if($uname===$_SESSION['uname'] && $pwd===$_SESSION['pwd'])
        {
            $_SESSION['token'] = $_COOKIE['PHPSESSID'];
            header("Location:session_profile.php");
        }
        else{
            echo "All Fields Are Required";
        }
    }
?>
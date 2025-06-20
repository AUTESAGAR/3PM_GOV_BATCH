<?php    
    $result="";
    if(isset($_POST['login']) && $_POST["uname"]&& $_POST["pwd"])
    {        
        $uname=$_POST['uname'];
        $pwd=$_POST['pwd'];
        $cookie_uname = $_COOKIE["uname"];
        $cookie_pwd = $_COOKIE["pwd"];

        if($uname!=$cookie_uname){
            $result="User Not Found";
        }
        else if($pwd!=$cookie_pwd){
            $result="Enter Valid Credentials";
        }
        else if($pwd===$cookie_pwd && $uname===$cookie_uname){
            $text = "1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
            $token = substr(str_shuffle($text),1,12);
            setcookie('token',$token,time()+3600);
            $result="Login Success";
            header("refresh:2,url=cookie_profile.php");
        }
    }
    else if(isset($_POST['login'])){
        $result="All Fields Are Required";
    }
?>


<center>
    <h3>Login Account</h3>
    <form action="" method="post">        
        <p><input type="text" name="uname" id="uname" placeholder="Enter Your username"></p>
        <p><input type="text" name="pwd" id="uname" placeholder="Enter Your password"></p>
        <p><?php echo $result; ?></p>
        <p><input type="submit" value="Login" name="login"></p>
    </form>
</center>


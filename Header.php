<center>
    <form action="" method="request">
        <h3>User Login</h3>
        <p><input type="text" name="uname" id="" placeholder="Enter Your username"></p>
        <p><input type="text" name="pwd" id="" placeholder="Enter Your Password"></p>
        <p><input type="submit" value="Login" name="login"></p>
    </form>
</center>

<?php
    echo $_COOKIE['search'];
    // if(isset($_REQUEST['login']))
    // {
    //     $uname = $_GET['uname'];
    //     $pwd = $_GET['pwd'];
    //     if($uname==="Samir@123" && $pwd==="Samir@123")
    //     {
    //         // header("Location:index.php");
    //         echo "Login Success";
    //         header("refresh:5, url=index.php");
    //     }
    //     else{
    //         echo "Enter Valid Uname And PWD";
    //     }
    // }
?>
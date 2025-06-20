<a href="cookie_profile.php?logout=<?php $_COOKIE["uname"]; ?>"> <button> Logout </button> </a>

<?php
    if (isset($_COOKIE["token"])){
        echo "Welcome, " . $_COOKIE["uname"];
    } 
    else {
        header("Location:Cookie.php");
    }

    if(isset($_GET['logout']))
    {
        setcookie("token",$_COOKIE["token"],time()-0);
        header("Location:cookie_login.php");
    }
?>
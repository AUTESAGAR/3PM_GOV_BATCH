<?php session_start(); ?>
<?php
    if(!($_SESSION['token'] === $_COOKIE['PHPSESSID'])){
        header("Location:session_login.php");
    }    
?>

<h1>Welcome, <?php echo $_SESSION['name'];  ?>  </h1>

<a href="sesssion_logout.php">
    <button> Logout </button>
</a>
<?php session_start(); ?>
<center>
    <h3>Create new Account</h3>
    <form action="" method="post">
        <p><input type="text" name="name" id="name" placeholder="Enter Your Name"></p>
        <p><input type="text" name="uname" id="uname" placeholder="Enter Your username"></p>
        <p><input type="text" name="pwd" id="pwd" placeholder="Enter Your password"></p>
        <p><input type="submit" value="Create" name="create"></p>
    </form>
</center>

<?php
    if(isset($_POST['create'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['uname'] = $_POST['uname'];
        $_SESSION['pwd'] = $_POST['pwd'];
        header("Location:session_login.php");
    }
?>
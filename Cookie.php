<center>
    <h3>Create new Account</h3>
    <form action="" method="post">
        <p><input type="text" name="name" id="name" placeholder="Enter Your Name"></p>
        <p><input type="text" name="uname" id="uname" placeholder="Enter Your username"></p>
        <p><input type="text" name="pwd" id="uname" placeholder="Enter Your password"></p>
        <p><input type="submit" value="Create" name="create"></p>
    </form>
</center>

<?php
    if(isset($_POST['create']) && $_POST["name"]&& $_POST["uname"]&& $_POST["pwd"])
    {
        setcookie("name",$_POST['name'],time()+3600);
        setcookie("uname",$_POST['uname'],time()+3600);
        setcookie("pwd",$_POST['pwd'],time()+3600);
        header("Location:cookie_login.php");
    }
?>
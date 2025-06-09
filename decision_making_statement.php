<!-- <form action="<?php // $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="number" name="age" placeholder="Enter Your Age">
    <input type="submit" value="Submit" name="submit">
</form> -->

<?php
    // if(isset($_POST['submit'])){
    //     $age=$_POST['age'];
    //     if($age>=18){
    //         echo "Adult";
    //     }
    //     else{
    //         echo "Child";
    //     }
    // }
?>


<?php
    $result="";
    if(isset($_POST['login'])){
        if($_POST['uname']==="Admin" && $_POST['pwd']==="Admin"){
            $result = "<span style='color:green'>Login Success</span>";
        }
        else{
            $result = "<span style='color:red'>Enter Valid Creedentials</span>";
        }
    }
?>
<center>
    <h1>Login Account</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <p><input type="text" name="uname" placeholder="Enter Your Username"></p>
        <p><input type="password" name="pwd" placeholder="Enter Your Password"></p>
        <p id="msg"><?php echo $result; ?></p>
        <p><input type="submit" value="Login" name="login"></p>
    </form>
</center>

<script>
    // document.querySelector("input").addEventListener("change",function(){
    //     document.getElementById("msg").innerText="";
    // })
    setTimeout(() => {
        document.getElementById("msg").innerText="";        
    }, 2000);
</script>
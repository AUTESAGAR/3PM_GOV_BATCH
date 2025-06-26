<?php
    $conn = mysqli_connect("localhost","root","","3pm");
    if(isset($_POST['reg'])){
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $photo = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];
        $folder = "./uploads/".time()."_".$photo;
        move_uploaded_file($tmp,$folder);
        $query="INSERT INTO `users` VALUES('','$name','$uname','$pwd','$email','$mobile','$folder')";
        $run = mysqli_query($conn,$query);
        if($run){
            header("Location:index.php");
        }
        else{
            header("Location:create.php");
        }
    }
?>
<center>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Sign Up</h3>
        <p><input type="text" name="name" id="name" placeholder="Enter Enter Your name"></p>
        <p><input type="text" name="uname" id="uname" placeholder="Enter Enter Your uname"></p>
        <p><input type="text" name="pwd" id="pwd" placeholder="Enter Enter Your pwd"></p>
        <p><input type="text" name="email" id="email" placeholder="Enter Enter Your email"></p>
        <p><input type="text" name="mobile" id="mobile" placeholder="Enter Enter Your mobile"></p>
        <p><input type="file" name="photo" id="photo"></p>
        <p><input type="submit" name="reg" id="submit" value="Reg"></p>
    </form>
</center>
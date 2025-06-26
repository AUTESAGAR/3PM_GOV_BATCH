<?php
    $conn = mysqli_connect("localhost","root","","3pm");
    $id = $_GET['id'];
    $query = "SELECT * FROM `users` WHERE `id`='$id'";
    $run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $uname = $_POST['uname'];        
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $photo = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];
        $folder = "./uploads/".time()."_".$photo;
        move_uploaded_file($tmp,$folder);
        $query="UPDATE `users` SET `name`='$name',`uname`='$uname',`email`='$email',`mobile`='$mobile',`photo`='$folder' WHERE `id`='$id'";
        $run = mysqli_query($conn,$query);
        if($run){
            header("Location:index.php");
        }
        else{
            header("Location:update.php");
        }
    }
?>
<center>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Edit User Info</h3>
        <p><input type="text" value="<?php echo $data['name']; ?>" name="name" id="name" placeholder="Enter Enter Your name"></p>
        <p><input type="text" value="<?php echo $data['uname']; ?>" name="uname" id="uname" placeholder="Enter Enter Your uname"></p>        
        <p><input type="text" value="<?php echo $data['email']; ?>" name="email" id="email" placeholder="Enter Enter Your email"></p>
        <p><input type="text" value="<?php echo $data['mobile']; ?>" name="mobile" id="mobile" placeholder="Enter Enter Your mobile"></p>
        <p><img src="<?php echo $data['photo']; ?>" alt="" height="80px"></p>
        <p><input type="file" name="photo" id="photo"></p>
        <p><input type="submit" name="update" id="submit" value="Update"></p>
    </form>
</center>
<?php   
    include_once("./config/connection.php");
    $id = $_GET['id'];
    $r = "";
    $query = "SELECT * FROM `products` WHERE `id`='$id'";
    $run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);
    $file = $data['pro_photo'];

    if(isset($_POST['update']) &&  $_POST['pro_name'] && $_FILES['pro_photo']['name']){
            if(file_exists($file)){
                if(unlink($file)){
                    $pro_name = $_POST['pro_name'];
                    $pro_photo = $_FILES['pro_photo']['name'];
                    $tmp = $_FILES['pro_photo']['tmp_name'];
                    $folder = "./uploads/".time()."_".$pro_photo;
                    move_uploaded_file($tmp,$folder);
                    $query = "UPDATE `products` SET `pro_name`='$pro_name', `pro_photo`='$folder' WHERE `id`='$id'";
                    $run = mysqli_query($conn,$query);
                    if($run){
                        header("Location:read.php");
                    }
                    else{
                        echo "Please Check Your Query";
                    }
                }
            }
        }

    else if(isset($_POST['update']) &&  $_POST['pro_name']){
        $pro_name = $_POST['pro_name'];
        $query = "UPDATE `products` SET `pro_name`='$pro_name' WHERE `id`='$id'";
        $run = mysqli_query($conn,$query);
        if($run){
            header("Location:read.php");
        }
        else{
            echo "Please Check Your Query";
        }
    }    
    else{
        $r = "All Fields Are Required";
    }
?>
<center>
    <h3>Edit Product Details</h3>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <p><input type="text" value="<?php echo $data['pro_name']; ?>" name="pro_name" placeholder="Enter Product Name"></p>
        <p><img src="<?php echo $data['pro_photo']; ?>" alt="product" height="50px"></p>
        <p><input type="file" name="pro_photo"></p>
        <p><?php echo $r ?></p>
        <p><input type="submit" value="Update" name="update"></p>
    </form>
</center>


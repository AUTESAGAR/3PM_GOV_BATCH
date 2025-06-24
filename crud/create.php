<center>
    <h3>Add New Product</h3>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <p><input type="text" name="pro_name" placeholder="Enter Product Name"></p>
        <p><input type="file" name="pro_photo"></p>
        <p><input type="submit" value="Add" name="add"></p>
    </form>
</center>

<?php   
    include_once("./config/connection.php");
    if(isset($_POST['add'])){
        $pro_name = $_POST['pro_name'];
        $pro_photo = $_FILES['pro_photo']['name'];
        $tmp = $_FILES['pro_photo']['tmp_name'];
        $folder = "./uploads/".time()."_".$pro_photo;
        move_uploaded_file($tmp,$folder);
        $query = "INSERT INTO `products` VALUES('','$pro_name','$folder')";
        $run = mysqli_query($conn,$query);
        if($run){
            header("read.php");
        }
        else{
            echo "Check Db Connection";
        }
    }

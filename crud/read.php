<?php
    include_once("./config/connection.php");
    $query = "SELECT * FROM `products`";
    $run = mysqli_query($conn,$query);

    if(isset($_GET['id'])){
        $id = $_GET['id'];        
        $query = "DELETE FROM `products` WHERE `id`='$id'";
        $run = mysqli_query($conn,$query);
        if($run){
            header("Location:read.php");
        }
    }    
?>
<table align="center" border width="80%">
    <tr>
        <th colspan="5">
            <a href="create.php">Add New Product</a>
        </th>
    </tr>
    <tr>
        <th>Id</th>
        <th>Product Photo</th>
        <th>Product Name</th>
        <th colspan="2">Operation</th>
    </tr>    
    <?php while($data = mysqli_fetch_assoc($run)){ ?>
        <tr>
            <td> <?php echo $data['id']; ?> </td>
            <td> <img src="<?php echo $data['pro_photo']; ?>" alt="pro_image" height="50px"> </td>
            <td> <?php echo $data['pro_name']; ?> </td>
            <td> <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> </td>
            <td> <a href="read.php?id=<?php echo $data['id']; ?>">Delete</a> </td>
        </tr>
    <?php } ?>
</table>
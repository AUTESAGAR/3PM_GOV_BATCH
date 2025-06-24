<?php
    include_once("./config/connection.php");
    $query = "SELECT * FROM `products`";
    $run = mysqli_query($conn,$query);    
?>
<table align="center" border width="80%">
    <tr>
        <th>Id</th>
        <th>Product Photo</th>
        <th>Product Name</th>
    </tr>    
    <?php while($data = mysqli_fetch_assoc($run)){ ?>
        <tr>
            <td> <?php echo $data['id']; ?> </td>
            <td> <img src="<?php echo $data['pro_photo']; ?>" alt="pro_image" height="50px"> </td>
            <td> <?php echo $data['pro_name']; ?> </td>
        </tr>
    <?php } ?>
</table>
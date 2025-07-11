<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
    $conn = mysqli_connect("localhost","root","","ecom");
    $query = "SELECT * FROM `products`";
    $run = mysqli_query($conn,$query);
?>

<main class="container row m-auto text-center">
    <?php while($data = mysqli_fetch_assoc($run)){ ?>
        <div class="col-3 border border-dark p-3">
            <form action="index.php" method="post">
                <p><?php echo $data['id']; ?> <input  type="hidden" name="id" value="<?php echo $data['id']; ?>"> </p>
                <p><?php echo $data['pro_name']; ?> <input  type="hidden" name="pro_name" value="<?php echo $data['pro_name']; ?>"> </p>
                <p><?php echo $data['pro_price']; ?> <input type="hidden" name="pro_price" value="<?php echo $data['pro_price']; ?>"> </p>
                <p><button class="btn btn-success">Buy Now</button></p>
            </form>
        </div>
        <?php } ?>
</main>

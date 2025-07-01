<?php
    $conn = mysqli_connect("localhost","root","","trading");
    if (isset($_GET['page'])){
        $c_p = $_GET['page'];
    }
    else{
        $c_p = 1;
    }
    $p_p_p = 3;
    $start = ($c_p - 1) * $p_p_p;
    $query = "SELECT * FROM `courses` LIMIT $start, $p_p_p";
    $result = mysqli_query($conn, $query);
    $total_pages = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <h3><?php echo $row['title']; ?></h3>
    <?php }
    } else {
        echo "No results found.";
    }
?>

<a href="pagination.php?page=<?php echo $c_p - 1 ?>">Previous</a>
<a href="pagination.php?page=1">1</a>
<a href="pagination.php?page=2">2</a>
<a href="pagination.php?page=3">3</a>
<a href="pagination.php?page=<?php echo $c_p + 1 ?>">Next</a>
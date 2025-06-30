<?php
    $conn = mysqli_connect("localhost","root","","trading");
    if (isset($_GET['page'])){
        $c_p = $_GET['page'];
    }
    else {
        $c_p = 1;
    }
    $p_p_p = 3;
    $start = ($c_p - 1) * $p_p_p;
    $query = "SELECT * FROM `courses` LIMIT $start, $p_p_p";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <h3><?php echo $row['title']; ?></h3>
    <?php }
    } else {
        echo "No results found.";
    }
?>
<a href="pagination.php?page=">Prev</a>
<?php
    $query = "SELECT * FROM `courses`";
    $result = mysqli_query($conn, $query);    
    while ($row = mysqli_fetch_assoc($result)){
?>
    <a href="pagination.php?page=<?php echo $row['id']; ?>">
        <?php echo $row['id']; ?>
    </a>
<?php } ?>
<a href="" id="set">
    <button id="get">next</button>
</a>
<script>
    document.getElementById("get").addEventListener("click",function(){
        let no = document.write("<?php $_GET['page'] ?>");
        let data = document.getElementById("set").href=`pagination.php?page=${++no}`;
        console.log(data);
    })
</script>
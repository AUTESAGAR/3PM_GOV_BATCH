<?php
    $conn = mysqli_connect("localhost", "root", "", "trading");
    $title = $_GET['title'];    
    $sql = "SELECT * FROM `courses` WHERE `title`='$title'";
    $run = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($run);    
?>

<center>
    <p><?php echo $data['title'] ?></p>
    <p><?php echo $data['subtitle'] ?></p>
    <p><?php echo $data['description'] ?></p>
    <p><?php echo $data['fees'] ?></p>
</center>
<?php
    $conn = mysqli_connect("localhost","root","","3pm");
    $id = $_GET['id'];
    $query = "DELETE FROM `users` WHERE `id`='$id'";
    $run = mysqli_query($conn,$query);
    if($query){
        header("Location:index.php");
    }    
?>
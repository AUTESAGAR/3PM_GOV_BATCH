<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","3pm");
    $id = $_SESSION['id'];
    $query = "SELECT * FROM `users` WHERE `id`='$id'";
    $run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);

    if(isset($_POST['logout'])){
        $id= $_POST['id'];
        $query="UPDATE `users` SET `logs`='' WHERE `id`='$id'";
        mysqli_query($conn,$query);
        session_destroy();
        header("Location:login.php");
    }        
    if(empty($_SESSION['id'])===empty($data['logs'])){
        // header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>Welcome, <?php echo $data['name']; ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>">
        <button name="logout">Logout</button>
    </form>
</body>
</html>

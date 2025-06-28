<style>    
    .main{
        border: 2px solid;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 10px;
    }
    .user{
        border: 2px solid;
        height: auto;
        width: 250px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
    }
    button{
        height: 30px;
        width: 90px;        
    }
    .delete{
        background-color: rgb(211, 43, 43);
    }
    .edit{
        background-color: rgb(3, 157, 3);
    }
    .create{
        background-color: rgb(255, 141, 1);
        line-height: 30px;
        margin: 10px auto;
        width: 150px;
        text-align: center;
    }
</style>

<?php
    $conn = mysqli_connect("localhost","root","","3pm");
    $query="SELECT * FROM `users`";
    $run = mysqli_query($conn,$query);       
?>

<a href="create.php"><p class="create">Add New User</p></a>



<div class="main">
    <?php while($data = mysqli_fetch_assoc($run)){ ?>
        <div class="user">
            <p><img src="<?php echo $data['photo'] ?>" alt="user" height="80px"></p>
            <p><?php echo $data['name'] ?></p>
            <p><?php echo $data['uname'] ?></p>
            <p><?php echo $data['email'] ?></p>
            <p><?php echo $data['mobile'] ?></p>
            <p>
                <a href="update.php?id=<?php echo $data['id'] ?>"><button class="edit">Edit</button></a>
                <a href="delete.php?id=<?php echo $data['id'] ?>"><button class="delete">Delete</button></a>
            </p>            
        </div>
    <?php } ?>
</div>
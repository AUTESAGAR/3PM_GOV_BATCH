<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    $conn=mysqli_connect("localhost","root","","demo");    
    $q="SELECT * FROM `users` JOIN `post` ON post.join_id = users.id";
    $r=mysqli_query($conn,$q);            
?>
<main class="m-auto w-50 border">
    <?php while($data = mysqli_fetch_assoc($r)){ ?>
        <p class="fw-bold"><?php echo $data['name']; ?></p>
            <p><?php echo $data['title']; ?></p>
            <p><?php echo $data['description']; ?></p>
            <button>like</button>
            <button id="comments">comment</button>
            <form action="joint_query.php" method="post" id="form" style="display: none;">
                <input type="text" name="id" id="id" value="<?php echo $_SESSION['id']; ?>">
                <textarea name="comment" id="comment"></textarea>
                <input type="submit" value="comment" name="comment">
            </form>
            <button>share</button>
    <?php } ?>

    <script>
        document.getElementById("comments").addEventListener('click',function(){
            this.style.display="none";
            document.getElementById("form").style.display="block";
        });
    </script>
</main>

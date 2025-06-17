    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container bg-warning fw-bold border border-5 text-center box-shadow py-3">
        <button class="btn btn-info" id="home">Home</button>
        <button class="btn btn-info" id="about">About</button>
        <button class="btn btn-info" id="login">User Login</button>
        <button class="btn btn-info" id="reg">Create Account</button>
    </div>

    <main id="result" class="container-fluid bg-light"></main>

    <script>
        $(document).ready(function(){
            $("#home").on("click",function(){
                $.ajax({
                    url:"home.php",
                    type:"GET",
                    success:function(res){
                        $("#result").html(res);
                    }
                })
            })
            $("#about").on("click",function(){
                $.ajax({
                    url:"about.php",
                    type:"GET",
                    success:function(res){
                        $("#result").html(res);
                    }
                })
            })
            $("#login").on("click",function(){
                $.ajax({
                    url:"login.php",
                    type:"GET",
                    success:function(res){
                        $("#result").html(res);
                    }
                })
            })            
            $("#reg").on("click",function(){
                $.ajax({
                    url:"reg.php",
                    type:"GET",
                    success:function(res){
                        $("#result").html(res);
                    }
                })
            })
        })
    </script>

</body>
</html>
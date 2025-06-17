    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<div class="bg-secondary text-light m-auto w-50 p-4">
    <table border align="center">
        <tr>
            <th colspan="5">
                <center>
                    <h1>Login User</h1>
                </center>
            </th>
        </tr>    
        <tr>
            <th class="px-4">Username</th>
            <td><input type="text" name="uname" id="uname" placeholder="Username" class="form-control my-2"></td>
        </tr>
        <tr>
            <th class="px-4">Password</th>
            <td><input type="password" name="pwd" id="pwd" placeholder="Password" class="form-control my-2"></td>
        </tr>        
        <tr>            
            <td colspan="4"><p id="login-result"></p></td>
        </tr>        
        <tr align="center">
            <td colspan="5">
                <input type="submit" value="Login" id="loginBtn">
            </td>
        </tr>    
    </table>
</div>

<script>
    $(document).ready(function(){            
        $("#loginBtn").click(function(){                
            $.ajax({
                url:"login_auth.php",
                type:"GET",
                data:{data : formdata},
                success:function(res){
                    $("#result").html(res);
                }
            })
        })
    })
</script>
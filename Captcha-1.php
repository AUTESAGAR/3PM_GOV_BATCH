<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<table border align="center">
    <tr>
        <th colspan="5">
            <h1>Login User</h1>
        </th>
    </tr>
    <tr>
        <th>Username</th>
        <td><input type="text" name="" id="uname" placeholder="Username"></td>
    </tr>
    <tr>        
        <th>Password</th>
        <td><input type="password" name="" id="pwd" placeholder="Password"></td>
    </tr>
    <tr>        
        <th>Captcha</th>
        <td><span id="result"></span> &nbsp; <span id="refresh">refresh</span></td>
    </tr>
    <tr align="center">
        <td colspan="5">
            <input type="submit" value="Login" id="login">
        </td>
    </tr>
</table>

<script>
    $(document).ready(function(){        
        $.ajax({
            url:"gen-captcha.php",
            type:"GET",
            success:function(response){                
                $("#result").html(response);
            }
        })
        $("#refresh").on("click",function(){
            $.ajax({
                url:"gen-captcha.php",
                type:"GET",
                success:function(response){                
                    $("#result").html(response);
                }
            })
        })
    })
</script>
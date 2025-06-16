<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Jquery CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 

<div class="container m-auto bg-info text-center p-5">
    <h3 class="py-2">User Login</h3>
    <input type="text" name="uname" id="uname" placeholder="Enter Username" class="form-control w-50 m-auto my-2">
    <input type="password" name="pwd" id="pwd" placeholder="Enter Password" class="form-control w-50 m-auto my-2">
    <input type="text" name="captchaData" id="captchaData" placeholder="Enter Captcha" class="form-control w-50 m-auto my-2">
    <div class="row m-auto bg-danger w-50">
        <div class="col-6 fs-4 text-center" id="captcha"></div>
        <div class="col-6 fs-4 text-center" id="refresh">refresh</div>
    </div>
    <input type="submit" value="login" name="login" class="btn btn-success my-2">
</div>

<script>
    $(document).ready(function(){
        $.ajax({
            url: "Generate_Captcha.php",
            type: "GET",
            success:function(response){
                $("#captcha").html(response);
            }
        })
        $("#refresh").click(function(){
            $.ajax({
                url: "Generate_Captcha.php",
                type: "GET",
                success:function(response){
                    $("#captcha").html(response);
                }
            })
        })
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php
// $text = "1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
// $text = "1234567890098765432112345678900987654321";
// $random = str_shuffle($text);
// echo $random;    
// $captcha = substr($random,0,5);
// echo $captcha;

// $otp = substr($random,0,6);
// echo $otp;

// $ID = "VIT";
// $no = substr($random,0,3);
// echo $ID."-".$no;
?>
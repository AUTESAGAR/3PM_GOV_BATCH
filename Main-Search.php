<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<input type="search" name="search" id="search">
<div id="result"></div>

<script>
    $(document).ready(function(){
        $("#search").keyup(function(){
            let value = $(this).val();            
            if(value!=""){
                $.ajax({
                    url:"Search.php",
                    method:"POST",
                    data:{searchData : value},
                    success:function(res){                             
                        $("#result").html(res);
                    }
                })
            }
            else{
                $("$result").html("");
            }
        })
    })
</script>
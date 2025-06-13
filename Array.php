<!-- <table border> -->
    <!-- <tr>
        <th>id</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
    </tr> -->

<?php
    // $data = ['Samir','Kiran','Sham','Arjun','Raju','Ram',"Shital","ABC"];
    // echo "<pre>";
    // print_r($data);
    // for($i=0;$i<count($data);$i++){
        //     echo $data[$i];
        // }
        
    // $data = array('name'=>'Samir',"mobile"=>8586598568,"email"=>"samir@gmail.com");
    // echo "<pre>";
    // print_r($data);
    // echo $data['name'];

    // error_reporting(0);
    // $data = array(
    //     1=>['name'=>'Samir',"mobile"=>8586598568,"email"=>"samir@gmail.com"],
    //     2=>['name'=>'Kiran',"mobile"=>7586598560,"email"=>"kiran@gmail.com"],
    //     3=>['name'=>'Shital',"mobile"=>9586598565,"email"=>"shital@gmail.com"],
    //     4=>['name'=>'Arjun',"mobile"=>8858659855,"email"=>"arjun@gmail.com"],
    // );
    // echo "<pre>";
    // print_r($data);
    // for($i=0;$i<=count($data);$i++){
    //     echo "<tr>";
    //         echo 
    //         "<td>".$data[$i]['']."</td>",
    //         "<td>".$data[$i]['name']."</td>",
    //         "<td>".$data[$i]['mobile']."</td>",
    //         "<td>".$data[$i]['email']."</td></tr>";
    // }    
?>
</table>


<?php
  $pro=array(
      array('1','Realme','5000'),
      array('2','Samsung','8000'),
      array('3','Oppo','10000'),
    );    
    foreach($pro as list($a,$b,$c))
    {
      echo $a,$b,$c."<hr>";
    }   
?>
















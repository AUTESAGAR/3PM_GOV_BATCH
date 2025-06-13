<?php  
// $text ="Lorem Something, Goes Here mahesh, ipsum dolor mahesh, sit amet, mahesh";
// echo "<h1>Uppercase</h1>";
// echo strtoupper($text);
// echo "<h1>Lowercase</h1>";
//  echo strtolower($text);  
//  echo "<h1>String Length</h1>";  
//  echo strlen($text);
//  echo "<h1>String Count in all Text</h1>";  
//  echo str_word_count($text);
//  echo "<h1>String Position</h1>";
//  echo strpos($text,'mahesh');
// echo "<hr><hr>";
//   echo "<h1>String Position reverse form</h1>";
//   echo strpos($text,'mahesh',-20);
//   echo "<h1>Search String Values</h1>";
//   echo strstr($text,'mahesh');
//   echo "<h1>Search String Values Before_Search</h1>";
//   echo strstr($text,'mahesh',true);
//   echo "<h1>Sub String SELECT STRING RANGE</h1>";
//   echo substr($text,0,5);
//   echo "<h1>In the text create new array with 5 Character</h1>";
//   $name ="Lorem ipsum dolor sit amet";
//   $result =str_split($name,5);
//   echo "<pre>";
//   print_r($result);

  echo "<hr><hr>";
  
//   $text ="Lorem Something, Goes Here mahesh, ipsum dolor mahesh, sit amet, mahesh";
//   echo "<h1>Used To Update Some Common Data as Per Ur Requirement</h1>";  
//   $result1 =chunk_split($text,5,'10');
//   echo "<pre>";
//   print_r($result1);
//   echo "<h1>Replace String</h1>";  
//   echo str_replace('mahesh','Sagar',$text);
//   echo "<h1>Replace String Withought Case Sensitive</h1>";  
//   echo str_ireplace('MAHESH','Sagar',$text);
//   echo "<h1>String Reverse</h1>";  
//   echo strrev($text);  
//   echo "<h1>String Shuffle</h1>";  
//   echo str_shuffle($text); 


// $names="-Mahesh-";
// echo $names."<br>";  
// echo trim($names,'-');
?>
<?php  
//   $name ='<a href="https://www.google.com">Google</a>';
  //   echo htmlentities($name,ENT_COMPAT); // Press CTRL + U For Result
//   echo htmlentities($name,ENT_NOQUOTES); // Press CTRL + U For Result
?>

<?php
//   $name ="Lorem ipsum, dolor sit, amet. / Lorem ipsum dolor, sit amet.Lorem, / ipsum dolor sit, / amet.Lorem ipsum / dolor sit amet.Lorem ipsum dolor sit amet";
//   $result = explode('.',$name);
//   echo "<pre>";
//   print_r($result);

//   $array = ['lastname', 'email', 'phone'];
//   echo $array[0]."<hr>";
//   $r = implode(",", $array);
//   echo $r;



  $name ="This is a Peocock";  
//   $add=addslashes($name); // Identify Any Symbol To Apply Slashes
//   echo "<br>";
//   echo $add."<br>";
//   echo "<br>";  
//   echo stripslashes($add);
  $r = addcslashes($name,"A..z"); // in the Range of A-Z Apply Slashesh
  echo $r;
?>
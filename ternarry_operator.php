<?php 

 $x= 5;

//  if($x==5){
//     echo "five";
//  }
//  else echo "other";

 echo "<hr>";

 echo $x==5 ? "five" : "ohter"; // ternary operator

 echo "<hr>";
 
 $y=5;

if(isset($y)){
    echo "it is isset";
} else echo "it is not set";

echo "<hr>";

$z =6;
echo $z ?? 'is not set';

echo "<hr>";

echo $k ?? 'is not set';  // null coalessing operator


?>
<?php
$name = [
    'mehedi',
    'bappy',
    'himel'
];

echo "<pre";

print_r($name);

echo "<hr>"; //fst  index array

$student = [
   'm' =>'mehedi',
    'b' =>'bappy',
    'h' =>'himel'
];

echo "<pre";

print_r($student);

echo "<hr>"; //2nd associative array
$student = [
    '0' =>'mehedi',
     '1' =>'bappy',
     '2' =>'himel'
 ];
 
 echo "<pre";
 
 print_r($student);

 echo $student['0']; 
 
 echo "<hr>"; //3rd associative array

 for($i=0;$i<count($student);$i++){
    echo $student[$i]."<br>";
 }

 echo "<hr>"; //4th associative array  print with for loop

 $name = [
    'ami' =>'mehedi',
     'tui' =>'rifat',
     'tuio' =>'himel'
 ];
 

 foreach($name as $value){
    echo $value."<br>";
 }

 echo "<hr>"; //5th associative array print with a foreach loop 

 foreach($name as $key=>$value){
    echo $key.' '.$value."<br>";
 }

 echo "<hr>"; 




 echo "<hr>"; //6th multidimentional array

 $department =['cse'=>['mehedi','rifat','himel'],
 
 
                'eee'=>['namzmul','pritom','tanzid']
 
];

 foreach($department as $key=>$value){
    echo $key."<br>";

    foreach($value as $k=>$v){
       
        echo "&nbsp;&nbsp;&nbsp;".($k+1).'-'.$v."<br>";
    }
    
}





 





?>
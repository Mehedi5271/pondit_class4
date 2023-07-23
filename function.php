<?php 

function name(){
    echo "hello sir";
}

name();

echo "<hr>";

function name2($name){
    echo "hello".' '.$name;
}
name2('mehedi');

echo "<hr>";

function cal($n1,$n2){
    echo $n1+$n2;
}

cal('5','2');


?>
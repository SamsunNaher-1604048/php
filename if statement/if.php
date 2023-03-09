<?php
$a=3;
$b=6;

if($a<$b){
    echo "A is smaller <br>";
}

if($a<$b):
    echo "A is smaller";
endif;

$age=20;

if($age>18 &&  $age<21){
    echo "you can go";
}
?>
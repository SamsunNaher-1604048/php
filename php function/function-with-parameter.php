<?php
 function hello($name){
    echo $name."<br>";
 }

 function hello2($first, $last){
    echo $first. $last."<br>";
 }

 function hello3($frist ='first',$last = 'last'){
    echo $frist.$last;
 }



 hello('nishi');
 hello2('nill','niti');
 hello3();
?>
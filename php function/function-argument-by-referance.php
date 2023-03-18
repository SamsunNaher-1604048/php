<?php

//pass by value
 function hello($name){
    $name."my name is nishhi";

 }

 $str = "nishi";
 hello($str);
 echo $str.'<br>';

 //pass by argument

 function hello2(&$name2){
    $name2  = $name2. "niti";

 }

 $str2 = "nill";
 hello2($str2);
 echo $str2.'<br>';

?>
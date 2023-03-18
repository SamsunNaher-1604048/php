<?php
 function hello($frist,$second){
    $v = $frist." ".$second;
    return $v;
 }

 echo hello('nill','niti')."<br>";
 $a = hello('samsun','naher');
 echo $a."<br>";


 function sum($math,$english,$bangla){
    $total = $math+$english+$bangla;
    return $total;
 }

 function percent($Total){
    $b =$Total/3;
    return $b;

 }

 $Total = sum(90,60,50);

 $a = percent($Total);

 echo $a;
?>
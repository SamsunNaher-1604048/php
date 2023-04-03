<?php
 $a = ['banana','oreng','apple'];

 $b =[1,2,3];

 $newarray = array_reduce($a,'reduce','lemon');
 $newarray1 = array_reduce($b,'add',0);

 function reduce($n,$m){
    return $n."-".$m;
 }

 function add($n,$m){
    $n = $n+$m;
    return $n;
 }

 echo "<pre>";
 print_r($newarray);
 echo"</pre>";

 echo "<pre>";
 print_r($newarray1);
 echo"</pre>";
?>
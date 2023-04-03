<?php
 $a = [1,2,3,4,5];
 $b =['apple','banana','oreng','mango'];

 $newarray = array_map('squre',$a,$b);
 $newarray1 = array_map(null,$a,$b);

 function squre($n,$m){
    return "$n = $m";
 }

 echo"<pre>";
 print_r($newarray);
 echo"</pre>";

 echo"<pre>";
 print_r($newarray1);
 echo"</pre>";


?>
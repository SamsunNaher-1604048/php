<?php
 $array=[
    'nishi'=>30,
    'nill'=>67,
    'niti'=>90,
 ];

 $newarray = array_flip($array);

 echo"<pre>";
 print_r($array);
 echo"</pre>";

 $newarray2 = array_change_key_case($array ,CASE_UPPER);
 echo"<pre>";
 print_r($newarray2);
 echo"</pre>";

?>
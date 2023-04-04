<?php
 $food = ['banana','apple','mango','oreng'];

 sort($food);

 echo"<pre>";
 print_r($food);
 echo"</pre>";

 $color = ['red','yello','green'];
 rsort($color);

 echo"<pre>";
 print_r($color);
 echo"<pre>";

 $food1= [
    'b'=>'banana',
    'a'=>'apple',
    'o'=>'oreng'
 ];

 asort($food1);
 echo"<pre>";
 print_r($food1);
 echo"</pre>";

 ksort($food1);
echo"<pre>";
print_r($food1);
echo"<pre>";


?>
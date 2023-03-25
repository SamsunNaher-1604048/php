<?php
 $fruites =['apple','oreng','mango'];
 $veg = ['carrot','pea'];

 $newarray = array_merge($fruites,$veg);

 echo "<pre>";
 print_r($newarray);
 echo "</pre>";

 //assocativr array

 $fruites =['a'=>'apple','b'=>'oreng','c'=>'mango'];
 $veg = ['c'=>'carrot','d'=>'pea',55,99];

 $newarray = array_merge($fruites,$veg);

 echo "<pre>";
 print_r($newarray);
 echo "</pre>";


 //array  recursive marge;

 
 $fruites =['a'=>'apple','b'=>'oreng','c'=>'mango'];
 $veg = ['c'=>'carrot','d'=>'pea',55,99];
 $newarray = array_merge_recursive($fruites,$veg);
 echo "<pre>";
 print_r($newarray);
 echo "</pre>";

 //array combibe

 $name=['nishi','nill'];
 $age = [23,78];

 $newarray =array_combine($name,$age);

 echo "<pre>";
 print_r($newarray);
 echo "</pre>";
?>
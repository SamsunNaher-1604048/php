<?php
 $a = ['nishi','nill','niti','nillniti','samsun'];

  $newarray = array_slice($a, 1,3);
  echo "<pre>";
  print_r($newarray);
  echo "</pre>";

  $newarray1 = array_slice($a,-2,3);
  echo "<pre>";
  print_r($newarray1);
  echo "</pre>";

  $newarray2 = array_slice($a,1,3,true);
  echo "<pre>";
  print_r($newarray2);
  echo "</pre>";

  $b = ['a'=>'nishi','b'=>'nill','c'=>'niti','d'=>'nillniti','e'=>'samsun'];

  $newarray3 = array_slice($b,1,3);
  echo "<pre>";
  print_r($newarray3);
  echo "</pre>";

  $newarray4 = array_slice($b,1,3,true);
  echo "<pre>";
  print_r($newarray4);
  echo "</pre>";

?>
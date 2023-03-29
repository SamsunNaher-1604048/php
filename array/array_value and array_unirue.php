<?php
  $a1= ['a'=>'red','b'=>'green','c'=>'red','d'=>'yellow'];

  $newarray = array_values($a1);
  echo "<pre>";
  print_r($newarray);
  echo "<pre>";


  $newarray2 = array_unique($a1);
  echo "<pre>";
  print_r($newarray2);
  echo "<pre>";

?>
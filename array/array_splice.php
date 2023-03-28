<?php
  $color = ['red','green','yellow','blue'];
  $fruites=['apple','banana'];

  //remove array element;

  array_splice($color,2);
  echo "<pre>";
  print_r($color);
  echo "</pre>";

  array_splice($color,3 ,2);
  echo "<pre>";
  print_r($color);
  echo "</pre>";

// array copy

array_splice($color,1,1,$fruites);
echo "<pre>";
print_r($color);
echo "</pre>";


?>
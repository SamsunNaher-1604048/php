<?php
  $color=['red','green','yellow','blue'];

  $newarray = array_rand($color,3);

  echo"<pre>";
  print_r($newarray);
  echo"</pre>";

  shuffle($color);

  echo "<pre>";
  print_r($color);
  echo "</pre>";
?>
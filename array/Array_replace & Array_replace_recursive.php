<?php
  $array = [1,2,3,4];
  $name = [7,0];

  $newarray = array_replace($array,$name);
   
  print_r($newarray);

  $array_1 = ['a'=>array('red'),'b'=>array('blue')];
  $array_2 = ['a'=>array('green'),'b'=>array('yello')];

  $newarray1 = array_replace_recursive($array_1,$array_2);
  print_r($newarray1);
?>
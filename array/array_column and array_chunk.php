<?php
  $array = array(
    array(
        'id'=>1,
        'name'=>'nishi',
        'salary'=>2000
    ),
    array(
        'id'=>2,
        'name'=>'nill',
        'salary'=>3000
    ),
    array(
        'id'=>3,
        'name'=>'niti',
        'salary'=>3000
    ),
);

  $newarray = array_column($array,'name');

  echo "<pre>";
  print_r($newarray);
  echo "<pre>";


  $color = ['red','green','yellow','blue','pink'];

  $newarray2 = array_chunk($color,3);

  echo "<pre>";
  print_r($newarray2);
  echo "<pre>";

  $number = ['a'=>1,'b'=>2,'c'=>3,'d'=>4];
  $newarray3 = array_chunk($number,2,true);

  
  echo "<pre>";
  print_r($newarray3);
  echo "<pre>";


?>
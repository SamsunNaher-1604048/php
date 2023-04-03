<?php
  $fruits = [
    'a'=>'lemon',
    'b'=>'mango',
    'c'=>'banana',
    'd'=>'apple'
  ];

  array_walk($fruits,"myfunction",'it is a value of');

  function myfunction($value,$key,$params){
    echo "$key $params  $value <br>";

  }

  $veg = [$fruits,"1"=>'carrot','2'=>'totato'];

  array_walk_recursive($veg,"myfunction2");

  function myfunction2($value,$key){
    echo"$key : $value<br>";

  }


?>
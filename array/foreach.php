<?php
  $color =['red','green','blue'];

  foreach($color as $value){
     echo $value .'<br>';
  }

  //print associeative array

  $age =[
    'nishi'=>78,
    'nill'=>89,
    'niti'=>90
  ];

  foreach($age as $key=>$value){
    echo $key.'=>'.$value."<br>";
  }
?>
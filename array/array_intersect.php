<?php

function compare($a,$b){
    if($a ===  $b){
        return 0;
    }else{
        return($a>$b)? 1:-1;
    }

}
 $a1 = ['a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow'];
 $a2 = ['a'=>'red','f'=>'green','d'=>'purple'];

 $newarray = array_intersect($a1,$a2);

 echo "<pre>";
  print_r($newarray);
  echo "</pre>";


//intersect kets
$newarray1 = array_intersect_key($a1,$a2);

echo "<pre>";
print_r($newarray1);
echo "</pre>";

//both key and value

$newarray2 = array_intersect_assoc($a1,$a2);
echo "<pre>";
print_r($newarray2);
echo "</pre>";

// user define function array

$newarray3 = array_intersect_uassoc($a1,$a2,"compare");
echo "<pre>";
print_r($newarray3);
echo "</pre>";


//compre only key.
$newarray4 = array_intersect_ukey($a1,$a2 ,"compare");
echo "<pre>";
print_r($newarray4);
echo "</pre>";





?>
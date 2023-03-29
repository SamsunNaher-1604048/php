<?php
 $a1= ['a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow'];
 $a2 = ['a'=>'red','f'=>'green','d'=>'purple'];

 function compare($a,$b){
    if($a===$b){
        return 0;
    }else{
        return ($a>$b)? 1:-1;
    }
 }

 $newarray = array_diff($a1,$a2);

 echo "<pre>";
 print_r($newarray);
 echo "</pre>";


 $newarray2 =array_diff_key($a1,$a2);

 echo "<pre>";
 print_r($newarray2);
 echo "</pre>";

 $newarray3 = array_diff_assoc($a1,$a2);
 echo "<pre>";
 print_r($newarray3);
 echo "</pre>";

$newarray4 = array_diff_uassoc($a1,$a2,"compare");
echo "<pre>";
print_r($newarray4);
echo "</pre>";

$newarray5 = array_diff_ukey($a1,$a2,"compare");
echo "<pre>";
print_r($newarray5);
echo "</pre>";

?>
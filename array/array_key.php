<?php
 $color =['frist'=>'red','second'=>'yellow','thired'=>'green','fourth'=>'blue'];

 $newarray = array_keys($color);

 echo "<pre>";
 print_r($newarray);
 echo "</pre>";

 $newarray2 = array_key_first($color);
 print_r($newarray2);

 
 $newarray3 = array_key_last($color);
 print_r($newarray3);

 $newarray4 = array_key_exists('second',$color);
 print_r($newarray4);


 if($newarray4){
    echo "key exist";
 }else{
    echo "key not exist";
 }
?>
<?php
 $array = ['apple','oreng','banana','grapes',55];
 echo in_array('apple',$array)."<br>";

 echo"index value". array_search("oreng",$array)."<br>";

 if(in_array('lime',$array)){
    echo "successfully find".'<br>';
 }else{
    echo "can not find"."<br>";
 }

 ///strict mode
 if(in_array('55',$array,true)){
    echo "successfully find".'<br>';
 }else{
    echo "can not find"."<br>";
 }
?>
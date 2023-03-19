<?php
 
 function local(){
    $a = 10;
    echo "inside variable" .$a .'<br>';
 }

 local();
 //echo "outside variable" .$a;

 //solve of error
 
 $a =10;
 function test(){
    global $a;
    echo "this is local scope ".$a."<br>";
 }
 test();
 echo "this is global scope" .$a."<br>";


//  other example

$x=10;
$y=5;

function test2(){
    global $x,$y;
    $x = $x+$y;
}

test2();
echo 'the value of x' . $x;

?>
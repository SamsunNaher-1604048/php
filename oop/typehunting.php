<?php
 class hello{
    public function sayhello(){
        echo "hello everyone";
    }
 }

 class bye{
    public function saybye(){
        echo "bye everyone";
    }
 }

 function wow( hello $c){
    $c->sayhello();
 }

 $test = new hello();
 wow($test);
?>
<?php
 class abc{
    public function __construct()
    {
        echo"this is contructor function"."<br>";
    }

    public function hello(){
        echo "this is  hello function"."<br>";
    }

    public function __destruct()
    {
        echo "this is destruct function"."<br>";
    }
 }

 $test = new abc();
 $test->hello();
 $test->hello();
?>
<?php

use derive as GlobalDerive;

 class base{
    public static $name = "nishi";

    // public static function show(){
    //     echo self::$name;
    // }

    // public function __construct($n)
    // {
    //     self::$name = $n;
    // }
 }

 class derive extends base{

    public function show(){
        echo parent::$name;
    }
 }


 $test = new derive();
 $test->show();
?>
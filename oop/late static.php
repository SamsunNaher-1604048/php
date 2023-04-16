<?php

use derive as GlobalDerive;

   class base{
    protected static $name ="nishi";

    public function show(){
        echo static::$name;
        echo self::$name;
    }
   }

   class derive extends base{
    protected static $name ="nill";
   }

   $test = new derive();
   $test->show();
?>
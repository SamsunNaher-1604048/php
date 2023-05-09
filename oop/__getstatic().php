<?php


  class student{
    private static function hello(){
        echo "this is a private static function";
    }

    public static function __callStatic( $method,$arg){
        echo"this is private method  ".$method;
    }

  }

  student::hello();
?>
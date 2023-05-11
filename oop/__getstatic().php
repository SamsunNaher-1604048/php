<?php


  class student{
    private static function hello($name){
        echo "this is a private static function"."<br>";
        echo $name."<br>";

    }

    public static function __callStatic( $method,$arg){
       if(method_exists(__class__,$method)){
          call_user_func_array([__class__,$method],$arg);
       }else{
         echo "no function is there"."<br>";
       }
       echo "this is static function"."<br>";
    }

  }

  student::hello("nishi");
?>
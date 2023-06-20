<?php


   interface Myinterface{

   }

   class mysecondclass{
     public $test;
     public function mymethod(){

     }
   }

   $obj2 = new mysecondclass();

   trait MyTrait{
    public function MyTrait(){

    }
   }

   if(property_exists('mysecondclass','test')){
    echo "this property has exits"."<br>";
    
   }else{
    echo "this property is not exist"."<br>";
   }

   if(trait_exists('MyTrait')){
    echo "this trait is exist"."<br>";
    class useTrait{
        use MyTrait;
    }
   }else{
    echo "this trait is not exist"."<br>";
   }

   if(interface_exists('Myinterface')){
    echo "this interface is exits"."<br>";
    class myclass{

    }
   }
   else{
      echo "this interface dose not exits"."<br>";
   }


   if(class_exists('myclass')){
     echo "this class is exist"."<br>";
     $obj = new myclass();

   }else{
    echo "this class dose not exist"."<br>";
   }


   if(method_exists($obj2,'mymethod')){
     echo "this method is exits"."<br>";
   }
   else{
     echo "this method dose not exits"."<br>";
   }

   if(is_a($obj2,'mysecondclass')){
    echo "this method is exits in mysecondclass"."<br>";
   }
  else{
    echo "this method dose not exits in mysecondclass"."<br>";
   }
 
?>
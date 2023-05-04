<?php

   class student{
    private $name;

    public function __set($property,$value){

        if(property_exists($this,$property)){

            $this->$property = $value;
        }
        else
        {
          echo "this is non-existantial or private property: ".$property;
        }
    }

    public function __get($property){
        echo "this is non-existantial or private property($property)";
    }

    public function hello(){
        return $this->name;
    }
   }

   $test = new student();
   $test->name ="nishi";
   echo $test->hello();
?>
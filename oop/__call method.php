<?php

class student{
    private $frist_name;
    private $last_name;

    private function setname($fname,$lname){
        $this->frist_name = $fname;
        $this->last_name = $lname; 
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this, $name)){
            call_user_func_array([$this, $name],$arguments);
            echo "value is match";

        }else{
           echo "function dose not match";
        }
    }
}

$test = new student();
$test->setname("nill","niti");
?>
<?php

class Student{
    public $course;
    private $first_name;
    private $last_name;
    private $details = ['name'=>'nishi','age'=>20];

    public function setNmae($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }


    // isset for variable;

    public function __isset($property)
    {
        echo isset($this->$property);
    }

    // isset for array
    public function __isset($key)
    {
        echo isset($this->details[$key]);
    }


}

$test = new Student();
$test->course= "PHP";
$test->setNmae('samsun','naher');
echo isset($test->course); //check  public variable
echo isset($test->first_name);//check privatev variable
echo isset($test->name);//check variable of array
 
?>
<?php

class student{
    public $course = 'php';
    private $first_name ;
    private $last_name;

    public function setname($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __sleep()
    {
        return array('first_name','last_name');
    }
}

$obj = new student();
$obj->setname('nill','niti');
$test = serialize($obj);
echo $test;
?>
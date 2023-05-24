<?php
class student{
    public $course = 'php';
    private $first_name ;
    private $last_mane;

    public function setname($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __unset($property)
    {
        unset($this->$property);
    }
}

$test = new student();
$test->setname('nill','niti');
unset($test->first_name);
unset($test->course);
print_r($test);

?>
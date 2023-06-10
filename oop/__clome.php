<?php

class student{
    public $name;
    public $course;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function Setcourse(course $c){
      $this->course = $c;
    }

    public function __clone(){
        $this->course = clone $this->course;
    }
}

class course{
    public $cname;
    public function __construct($cn)
    {
        $this->cname = $cn;
    }
}


$student1 = new student('nishi');
$course1 = new course('php');
$student1->Setcourse($course1);

$student2 = clone $student1;//copy by feferance;
$student2->course->cname = "python";
// $student3 = $student2;//copy by value
// $student3->name = "samsun";

$student2->name = "nillniti";

// echo $student2->name."<br>";
// echo $student3->name."<br>";

print_r($student1)."<br>";
print_r($student2);
?>
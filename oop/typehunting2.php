<?php
class school{
    public function getName(student $names){
        foreach ($names->name() as  $name) {
            echo $name."<br>";
        }
    }
}

class student{
    public function name(){
        return['nishi','nill','nillniti'];
    }
}

$stu = new student;
$sch = new school;

$sch->getName($stu)
?>
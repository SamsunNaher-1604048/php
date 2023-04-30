<?php

class person{
    public function first(){
        echo "this is frist function"."<br>";
        return $this;
    }
    public function second(){
        echo "this is second function"."<br>";
        return $this;
    }
    public function third(){
        echo "this is third function"."<br>";
        return $this;
    }
}

$test = new person;
$test->first()->second()->third();
?>
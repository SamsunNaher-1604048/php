<?php

abstract class nishi{
    public $name;

    abstract protected function cal( $a,$b);
}

class nill extends nishi{

 public function cal( $a,$b){ //parameter must be same;
    return $a+$b;
 }
}


$text = new nill();
$test->cal(10,6);


?>
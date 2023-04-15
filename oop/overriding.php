<?php
  class base{
    public $name = "parants class";

    public function cal($a,$b){
        return $a+$b;
    }
  }

  class derive extends base{
    public $name ="child class";
    
    public function cal($a,$b){
        return $a*$b;
    }
  }

  $a1 = new base();
  echo $a1->name;
  echo $a1->cal(3,7);

  $c1 = new derive();
  echo $c1->name;
  echo $c1->cal(3,7);

?>
<?php

 class calculation{
    public $a,$b,$c;

    function sun(){
        $this->c =$this->b+$this->a;
        return  $this->c;
    }

    function sub(){
        $this->c =$this->b-$this->a;
        return  $this->c;
    }
 };

 $c1 = new calculation();
 $c1->a = 20;
 $c1->b = 30;
 echo $c1->sun()."<br>";


 $c2 = new calculation();
 $c2->a = 50;
 $c2->b = 100;
 echo $c2->sub()."<br>";

?>
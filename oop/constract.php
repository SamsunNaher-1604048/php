<?php
 class person{
    public $name,$age;

    function __construct($n="no name",$a=0)
    {
        $this->name = $n;
        $this->age = $a;
    }

    function show(){
        echo $this->name."-".$this->age."<br>";
    }
 }

 $p1 = new person("nishi",90);
 $p2 = new person("nillniti",80);
 $p3 = new person();

 $p1->show();
 $p2->show();
 $p3->show();

?>
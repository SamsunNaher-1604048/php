<?php
 class base{
    public $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo $this->name;
    }
 }

 $b1 = new base("nishi");
 $b1->show();



 class base1{
    protected $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo $this->name;
    }
 }

 $b2 = new base1("nishi");
 $b2->$name="nill";
 $b2->show();


?>
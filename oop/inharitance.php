<?php
 class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function show(){
        echo "<h3>employee info</h3><br>";
        echo "name  ".$this->name."<br>";
        echo "age  ".$this->age."<br>";
        echo "salary  ".$this->salary."<br>";
    }
 }


 class manager extends employee{
    public $phonebill = 300;
    function show(){
        $this->salary = $this->phonebill+$this->salary;
        echo "<h3>manager info</h3><br>";
        echo "name  ".$this->name."<br>";
        echo "age  ".$this->age."<br>";
        echo "salary  ".$this->salary."<br>";
    }
 }

 $e1 = new employee("nishi",6,900);
 $e1->show();

 $m1= new manager('nill',8,90);
 $m1->show();

?>
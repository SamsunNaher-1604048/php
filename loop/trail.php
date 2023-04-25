<?php
 trait test{
    public function hello(){
        echo "hello"."<br>";
    }

    public function hello2(){
        echo "hello nishi"."<br>";
    }
 }

 trait test2{
    public function buy(){
        echo "bay nishi"."<br>";
    }
 }

 class base{
    use test,test2;
}

class base2{
    use test,test2;
}

$b1 = new base();
$b1->hello();
$b1->hello2();
$b1->buy();

$b2 = new base2();
$b2->hello();
$b1->hello2();
$b1->buy();
?>
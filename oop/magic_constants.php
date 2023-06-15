<?php
echo "line munmer :".__LINE__."<br>";
echo "the full path of this file:".__FILE__."<br>";
echo "the directory of this file:".__DIR__."<br>";

 function Myname(){
    echo "the Function name:".__FUNCTION__."<br>";
 }
 Myname();

trait mytrait{
    public function getTrait(){
        echo "the Function name:".__TRAIT__."<br>";   
    }
}


 class Myclass{

    use mytrait;

    public function getname(){
        echo "the Function name:".__CLASS__."<br>"; 
        echo "the Function name:".__METHOD__."<br>"; 
    }
 }

 $obj = new Myclass();
 $obj->getname();
$obj ->getTrait();

?>
<?php
class abc{
    public function __toString()
    {
        return "you can not print this object";
    }

}
$test = new abc();
echo $test;
?>
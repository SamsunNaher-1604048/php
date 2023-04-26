<?php
require 'product.php';
require 'test.php';

function wow(){
    echo "this is from index class"."<br>";
}

$obj1 = new pro\product();
$obj2 = new test\product();

wow();
pro\wow();

?>
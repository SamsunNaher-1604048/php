<?php
// require "frist.php";
// require "second.php";


spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$test = new frist();
$test2 = new second();
?>
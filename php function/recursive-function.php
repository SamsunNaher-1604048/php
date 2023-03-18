<?php

function display($number){
    if($number<5){
        echo "the number is ". $number ."<br>";
        display($number+1);
    }
}

display(1);

//find factorial of a number

function factorial($number){
    if($number==0){
        return 1;
    }
    else{
        return($number*factorial($number-1));
    }

}

 echo factorial(5);
?>
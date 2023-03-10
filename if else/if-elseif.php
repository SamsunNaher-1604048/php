<?php
// $par =(int)readline('enter mark');
$par= 40;

if($par>=80 && $par<=100){
    echo "A+";
}
elseif($par>=60 && $par<80){
    echo "B+";
}
elseif($par>=40 && $par <60){
    echo "c+";
}
elseif ($par <33){
    echo "fail";
}
else "enter valid munber";
?>
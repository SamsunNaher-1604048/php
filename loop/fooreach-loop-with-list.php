<?php
 $emp =[
    [1,'a',8000],
    [2,'b',9000],
    [3,'b',5000]
 ];

 foreach($emp as list($id,$mane,$salary)){
    echo $id." " .$mane. " ". $salary."<br>";
 }
?>
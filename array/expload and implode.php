<?php
$str ='I am mishi';

$newarray=explode(" ",$str,2);

echo "<pre>";
print_r($newarray);
echo "</pre>";


$array =["nishi",'nill','niti'];

$str2=implode("-",$array);
echo $str2;

?>
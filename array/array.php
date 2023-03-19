<?php
$a = array('red','yello','blue','green');
echo $a[0];

$b = [1,'red',2,'blue'];
echo $b[3];

echo "<pre>";
print_r($b);
echo "</pre>";

for($i=0;$i<4;$i++){
   echo $a[$i]."<br>";
}
?>
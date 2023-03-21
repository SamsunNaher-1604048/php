<?php
$emp =[
    [1,"nishi",'9000'],
    [2,'nill','8900'],
    [3,'niti','9087']
];

echo "<pre>";
print_r($emp);
echo "</pre>";

for($row=0;$row<3;$row++){
    for($col =0;$col<3;$col++){
        echo $emp[$row][$col]." ";
    }
    echo"<br>";
}

?>
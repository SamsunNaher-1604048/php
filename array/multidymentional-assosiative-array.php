<?php
 $marks =[
    "nishi"=>[
        'math'=>70,
        'english'=>60,
        'bangla'=>80,
    ],
    "nill"=>[
        'math'=>200,
        'english'=>90,
        'bangla'=>87,
    ],
    "niti"=>[
        'math'=>78,
        'english'=>80,
        'bangla'=>56,
    ],
];

 echo "<pre>";
 print_r($marks);
 echo "</pre>";

 foreach($marks as $key=>$v1){
    echo $key ."<br>";

    foreach($v1 as $v2){
        echo $v2 . " ";
    }
    echo "<br>";
 }
?>
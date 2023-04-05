<?php
   $food =['banana','apple','oreng','grapes'];

   echo current($food)."<br>";
   echo "current key:".key($food)."<br>";

   next($food);
   echo current($food)."<br>";
   echo "current key:".key($food)."<br>";

   next($food);
   echo current($food)."<br>";
   echo "current key:".key($food)."<br>";

   prev($food);
   echo current($food)."<br>";
   echo "current key:".key($food)."<br>";

   end($food);
   echo current($food)."<br>";
   echo "current key:".key($food)."<br>";

   reset($food);
   echo current($food)."<br>";
   echo "current key:".key($food)."<br>";
?>
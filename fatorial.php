<?php
  $n=5;
  $fatorial=1;
  $count=1;

  while($count<=$n){
   $fatorial *= $count;
   $count++;
  } 
  echo $fatorial;
?>
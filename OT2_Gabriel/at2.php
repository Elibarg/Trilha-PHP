<?php

function primo($n) {
    $n = 6;
    $divisores = 0;
  
  for($i=2; $i<$n; $i++)
   if($n % $i == 0){
    echo "Multiplo de $i ";
    $divisores++;
   }
  
   if($divisores) {
    echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
   } else{
    echo "É primo!";
   }
   
    
}
$a = primo(1);
echo $a;



?>
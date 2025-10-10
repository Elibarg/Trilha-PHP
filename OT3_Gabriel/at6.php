<?php
   for($i = 2; $i <=10; $i+=2)   // Loop de 2 a 10, incrementando de 2 em 2
   {
      if($i == 6) continue;       // Pula a iteração quando $i for 6
      echo "$i\n";                // Exibe o número
   }
   // OUTPUT: 2, 4, 8, 10 (o 6 é pulado)
?>
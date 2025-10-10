<?php
 $a = array (  // Array bidimensional (matriz 5x3)
    array(1,2,3),    // Linha 0: [1,2,3]
    array(4,5,6),    // Linha 1: [4,5,6]  
    array(7,8,9),    // Linha 2: [7,8,9]
    array(1,3,2),    // Linha 3: [1,3,2]
    array(6,4,5)     // Linha 4: [6,4,5]
 );

 $b = $a[0][2] * $a[1][0];  // a[0][2] = 3, a[1][0] = 4 → 3 × 4 = 12
 echo $b;  // OUTPUT: 12
?>
<!-- 5. Crie dois arrays indexados com números. Concatene os dois arrays em um único
array -->

<?php
 $a = array(1);  // Array com um elemento
 $b = array(2);  // Array com um elemento
  
 $c = array_merge($a,$b);  // Combina os dois arrays em um novo
 // $c = [1, 2]

 print_r($c)  // Exibe estrutura do array: Array ( [0] => 1 [1] => 2 )

 //-array_merge() Função para unir (mesclar) dois ou mais arrays.
 //-print_r() Função usada para imprimir o conteúdo de variáveis (principalmente arrays e objetos) de forma legível.
?>
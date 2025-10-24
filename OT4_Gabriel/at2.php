<!-- 2. Crie um array indexado com nomes de cinco países. Remova o terceiro país do
array. -->

<?php
$a = ["Rússia","Canadá","China","Estados Unidos","Brasil"];

unset($a[2]);  // Remove o elemento no índice 2 ("China")
//- unset() serve para destruir (remover) uma variável, elemento de array
foreach ($a as $key => $value) {
    echo "$key  $value\n";  // Exibe índice e valor
}
// OUTPUT:
// 0  Rússia
// 1  Canadá
// 3  Estados Unidos
// 4  Brasil
// NOTA: Os índices não são reordenados, fica um "buraco" no índice 2
?>
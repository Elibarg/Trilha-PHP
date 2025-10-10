<?php
$a = ["Rússia","Canadá","China","Estados Unidos","Brasil"];

unset($a[2]);  // Remove o elemento no índice 2 ("China")

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
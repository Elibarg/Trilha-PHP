<?php
  $a = array(  // Cria array associativo
    "título" => "ab",
    "autor" => "cv", 
    "ano" => "34"
);

$a['editora'] = "aev";  // Adiciona novo elemento ao array

foreach ($a as $key => $value) {  // Itera sobre chave e valor
    echo "$key  $value\n";  // Exibe cada par chave-valor
}
// OUTPUT:
// título  ab
// autor  cv  
// ano  34
// editora  aev
?>
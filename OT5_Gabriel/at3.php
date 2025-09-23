<?php
$novaLinha = ["2024-07-20", "Produto X", 299.90];
$arquivo = fopen("dados.csv", "a");
fputcsv($arquivo, $novaLinha);
fclose($arquivo);
echo "Linha adicionada!";
?>

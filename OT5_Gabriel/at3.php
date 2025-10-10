<!-- 3. Crie um script que adicione uma nova linha com dados fictícios em um arquivo CSV
existente. -->

<?php
$novaLinha = ["2024-07-20", "Produto X", 299.90];  // Dados da nova linha

// Abre arquivo CSV em modo append (adiciona ao final)
$arquivo = fopen("dados.csv", "a");

// Escreve a nova linha no formato CSV
fputcsv($arquivo, $novaLinha);

fclose($arquivo);  // Fecha o arquivo
echo "Linha adicionada!";  // Confirmação

// Antes: dados.csv com linhas existentes
// Depois: adiciona "2024-07-20,Produto X,299.90" no final
?>
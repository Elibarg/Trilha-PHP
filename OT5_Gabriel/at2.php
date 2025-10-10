<?php
$vendas = [];  // Array para armazenar valores de vendas

// Abre arquivo CSV para leitura
if (($handle = fopen("vendas.csv", "r")) !== FALSE) {
    // Lê cada linha do CSV
    while (($linha = fgetcsv($handle)) !== FALSE) {
        $vendas[] = $linha[1];  // Adiciona segunda coluna (valores) ao array
        // Supondo estrutura: [data, valor, produto]
    }
    fclose($handle);  // Fecha o arquivo
}

// Calcula média: soma todos os valores ÷ quantidade
$media = array_sum($vendas) / count($vendas);

// Exibe resultado formatado com 2 casas decimais
echo "Média de vendas: R$ " . number_format($media, 2);
// Exemplo: "Média de vendas: R$ 150.75"
?>
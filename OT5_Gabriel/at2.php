<!-- 2. Abra um arquivo CSV contendo informações de vendas. Calcule e exiba a média de
vendas a partir desses dados. -->

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

//-array_sum() Soma todos os valores numéricos de um array.
//-number_format()Formata um número para exibição, adicionando separadores de milhar e decimais
//-count()Conta o número de elementos em um array (ou propriedades de um objeto que implementa
?>
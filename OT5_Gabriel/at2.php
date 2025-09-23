<?php
$vendas = [];
if (($handle = fopen("vendas.csv", "r")) !== FALSE) {
    while (($linha = fgetcsv($handle)) !== FALSE) {
        $vendas[] = $linha[1]; // Supondo que a segunda coluna seja o valor
    }
    fclose($handle);
}
$media = array_sum($vendas) / count($vendas);
echo "Média de vendas: R$ " . number_format($media, 2);
?>

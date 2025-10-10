<!-- 1. Crie uma função personalizada em PHP que calcule a média ponderada de
três notas (pesos: 2, 3, 5). -->

<?php
function media() {
    // Define os pesos das notas
    $peso1 = 2;
    $peso2 = 3;
    $peso3 = 5;

    // Calcula notas ponderadas (nota × peso)
    $nota1 = 10 * $peso1;  // 10 × 2 = 20
    $nota2 = 10 * $peso2;  // 10 × 3 = 30
    $nota3 = 2 * $peso3;   // 2 × 5 = 10
    
    $somaPeso = $peso1 + $peso2 + $peso3;  // 2+3+5 = 10
    $somaNota = $nota1 + $nota2 + $nota3;  // 20+30+10 = 60
    
    $media = $somaNota / $somaPeso;  // 60 ÷ 10 = 6.0
    return $media;  // Retorna a média calculada
}
$a = media();  // Chama a função (resultado: 6.0)
echo "$a";     // Exibe "6"
?>
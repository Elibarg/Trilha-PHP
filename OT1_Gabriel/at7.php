<!-- 7. Escreva um programa que receba o dia da semana como entrada e exiba uma
mensagem correspondente (por exemplo, "Hoje é dia de trabalho!").
 -->

<?php

$dia = "Sábado";  // Dia da semana a ser verificado

// Switch para verificar o dia da semana
switch ($dia) {
    case "Segunda":
    case "Terça":
    case "Quarta":
    case "Quinta":
    case "Sexta":
        echo "Hoje é dia de trabalho!";  // Dias úteis
        break;
    case "Sábado":
    case "Domingo":
        echo "Hoje é dia de descanso!";  // Finais de semana
        break;
    default:
        echo "Dia inválido";  // Caso o dia não seja reconhecido
}
?>

<!-- 10. Crie uma função que receba dois números como parâmetros e retorne o resultado
da multiplicação. Chame essa função e exiba o resultado. -->

<?php
$num1 = 9;
$num2 = 2;

function calculo($num1,$num2) {
 $resultado = $num1 * $num2;
 return $resultado;
};

$a = calculo($num1,$num2);
echo "$a";
?>
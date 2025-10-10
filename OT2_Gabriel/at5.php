<!-- 5. Desenvolva uma função que, dado um timestamp Unix como parâmetro,
retorne a data e hora formatadas (por exemplo, "DD/MM/AAAA HH:mm:ss"). -->

<?php
echo date("d/m/y\nh:m:s");
// Exibe data e hora no formato: dia/mês/ano + hora:minuto:segundo

function data(){
    return date("");
    // Retorna data e hora formatadas
    // "d" - dia (01-31)
    // "m" - mês (01-12)
    // "y" - ano (2 dígitos)
    // "h" - hora (01-12)
    // "i" - minutos (00-59)
    // "s" - segundos (00-59)
}
$a = data();  // Chama a função e armazena o resultado
echo "$a";    // Exibe o valor retornado
?>
<?php
echo date("d/m/y\nh:m:s")
// Exibe data e hora no formato: dia/mês/ano + hora:minuto:segundo
// \n é quebra de linha
// NOTA: Há um erro no formato - "h:m:s" deveria ser "h:i:s" para minutos
?>

<?php
function data(){
    return date("d/m/y\nh: i: s");
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
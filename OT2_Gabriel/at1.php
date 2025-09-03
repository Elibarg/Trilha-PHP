<?php


function media() {
    
    $peso1 = 2;
    $peso2 = 3;
    $peso3 = 5;

    $nota1 = 10 *$peso1;
    $nota2 = 10 *$peso2;
    $nota3 = 2 *$peso3;
    $somaPeso = $peso1 + $peso2 + $peso3;
    $somaNota = $nota1 + $nota2 + $nota3;
;
    $media = $somaNota / $somaPeso;
    return $media;
}
$a = media();
echo "$a";
?>
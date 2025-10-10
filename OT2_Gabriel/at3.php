<?php
function reversed(){
    $string = ("This is a reversed string");  // String original
    
    return strrev($string);  // Retorna a string invertida
    // strrev() é função nativa do PHP que inverte strings
    // Resultado: "gnirts desrever a si sihT"
}
$a = reversed();  // Chama a função
echo "$a";        // Exibe a string invertida
?>
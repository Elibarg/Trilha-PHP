<!-- 3. Utilize uma função predefinida do PHP para inverter a ordem das palavras
em uma frase. -->

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
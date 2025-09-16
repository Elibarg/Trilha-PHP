<?php

// 1. Criar o array com letras do alfabeto
$letras = ['a', 'b', 'c', 'd', 'a', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'a'];

// 2. Contar quantas vezes a letra "a" aparece
$contagem = substr_count(implode('', $letras), 'a');

// 3. Imprimir o resultado
echo "A letra 'a' aparece $contagem vezes no array.";

?>
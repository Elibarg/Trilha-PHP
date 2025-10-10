<!-- 4. Crie um array contendo letras do alfabeto. Conte quantas vezes a letra "a" aparece
no array. -->

<?php
// 1. Criar o array com letras do alfabeto
$letras = ['a', 'b', 'c', 'd', 'a', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'a'];

// 2. Contar quantas vezes a letra "a" aparece
$contagem = substr_count(implode('', $letras), 'a');
// implode('', $letras) → Converte array em string: "abcdaefghijklmnopqrstuvwxyza"
// substr_count(string, 'a') → Conta ocorrências de 'a' na string

// 3. Imprimir o resultado
echo "A letra 'a' aparece $contagem vezes no array.";  // OUTPUT: 3 vezes
?>
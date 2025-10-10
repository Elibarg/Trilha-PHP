<!-- 6. Desenvolva um código que leia um arquivo de texto chamado "paragrafo.txt" e conte
o número de palavras contidas nele. Exiba o resultado. -->

<?php
// Lê todo o conteúdo do arquivo de texto
$texto = file_get_contents("paragrafo.txt");

// Conta quantas palavras existem no texto
$numPalavras = str_word_count($texto);

// Exibe o resultado
echo "Número de palavras: $numPalavras";

// str_word_count() considera palavras como sequências de caracteres
// separadas por espaços, pontuação, etc.
?>
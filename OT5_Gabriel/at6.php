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
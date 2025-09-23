<?php
$texto = file_get_contents("paragrafo.txt");
$numPalavras = str_word_count($texto);
echo "Número de palavras: $numPalavras";
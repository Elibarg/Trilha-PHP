<?php
// Notas do aluno
$nota1 = 9;
$nota2 = 9;
$nota3 = 9;

// Cálculo da média aritmética
$media = ($nota1 + $nota2 + $nota3) / 3;

// Verifica se a média é maior ou igual a 7
if ($media >= 7) {
    echo "Aprovado com média: " . $media;
} else {
    echo "Reprovado com média: " . $media;
}

?>
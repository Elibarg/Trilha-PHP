<!-- 2. Implemente uma função personalizada que receba um número como
parâmetro e determine se é um número primo. -->

<?php
function primo() {
    $n = 12;        // Número a ser verificado
    $divisores = 0; // Contador de divisores
    
    // Verifica divisores de 2 até n-1
    for($i=2; $i<$n; $i++)
        if($n % $i == 0){        // Se n é divisível por i
            echo "Multiplo de $i ";  // Exibe o divisor
            $divisores++;        // Incrementa contador
        }
    
    // Analisa resultado
    if($divisores) {
        echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
        // Se encontrou divisores, não é primo
    } else{
        echo "É primo!";  // Se não encontrou divisores, é primo
    }
}
$a = primo();  // Chama a função (para 11: "É primo!")
echo $a;       // Exibe o resultado
?>
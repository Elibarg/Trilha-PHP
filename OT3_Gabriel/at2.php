<!-- 2. Implemente um loop while que conte o número de vezes que um usuário digita a palavra
"PHP" em um prompt. 
digite no terminal php OT3_Gabriel/at2.php
-->

<?php
$count = 0;  // Contador para a palavra 

while (true) {  // Loop infinito
    // Lê a entrada do usuário
    $input = readline("Digite uma palavra (ou 'sair' para encerrar): ");

    // Se o usuário quiser encerrar
    if (strtolower($input) === "sair") {  // Converte para minúsculas e verifica
        break;  // Sai do loop
        // -strtolower() do PHP é usada para converter todos os caracteres de uma string para letras minúsculas.
    }

    // Verifica se digitou "PHP"
    if ($input === "php") {
        $count++;  // Incrementa o contador
    }
}

echo "Você digitou 'PHP' $count vezes.\n";  // Exibe resultado final
?>
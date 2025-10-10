<?php
$count = 0;  // Contador para a palavra "PHP"

while (true) {  // Loop infinito
    // Lê a entrada do usuário
    $input = readline("Digite uma palavra (ou 'sair' para encerrar): ");

    // Se o usuário quiser encerrar
    if (strtolower($input) === "sair") {  // Converte para minúsculas e verifica
        break;  // Sai do loop
    }

    // Verifica se digitou "PHP"
    if ($input === "PHP") {
        $count++;  // Incrementa o contador
    }
}

echo "Você digitou 'PHP' $count vezes.\n";  // Exibe resultado final
?>
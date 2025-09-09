<?php
$count = 0;

while (true) {
    // Lê a entrada do usuário
    $input = readline("Digite uma palavra (ou 'sair' para encerrar): ");

    // Se o usuário quiser encerrar
    if (strtolower($input) === "sair") {
        break;
    }

    // Verifica se digitou "PHP"
    if ($input === "PHP") {
        $count++;
    }
}

echo "Você digitou 'PHP' $count vezes.\n";
?>


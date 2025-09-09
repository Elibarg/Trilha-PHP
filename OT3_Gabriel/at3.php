<?php
do {
    $senha = readline("Digite uma senha (mínimo 8 caracteres e pelo menos 1 número): ");
    
    $valida = true;
    
    if (strlen($senha) < 8) {
        echo "• Mínimo 8 caracteres necessários\n";
        $valida = false;
    }
    
    if (!preg_match('/[0-9]/', $senha)) {
        echo "• Pelo menos 1 número necessário\n";
        $valida = false;
    }
    
} while (!$valida);

echo "Senha válida! \n";
?>
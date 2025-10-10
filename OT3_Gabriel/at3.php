<?php
do {  // Executa pelo menos uma vez
    $senha = readline("Digite uma senha (mínimo 8 caracteres e pelo menos 1 número): ");
    
    $valida = true;  // Assume que a senha é válida inicialmente
    
    // Verifica comprimento mínimo
    if (strlen($senha) < 8) {
        echo "• Mínimo 8 caracteres necessários\n";
        $valida = false;  // Marca como inválida
    }
    
    // Verifica se contém pelo menos 1 número usando expressão regular
    if (!preg_match('/[0-9]/', $senha)) {
        echo "• Pelo menos 1 número necessário\n";
        $valida = false;  // Marca como inválida
    }
    
} while (!$valida);  // Repete enquanto a senha não for válida

echo "Senha válida! \n";  // Mensagem de sucesso
?>
<!-- 6. Desenvolva um script que verifica se uma senha é forte o suficiente (pelo menos 8
caracteres, incluindo letras maiúsculas, minúsculas, números e caracteres
especiais). -->

<?php


$senha = "Senha123#";  // Senha a ser verificada

// Verifica se a senha atende a todos os critérios:
// - Pelo menos 8 caracteres (strlen)
// - Pelo menos uma letra maiúscula (preg_match com regex)
// - Pelo menos uma letra minúscula
// - Pelo menos um número
// - Pelo menos um caractere especial
// - A função preg_match() do PHP serve para procurar um padrão (expressão regular) dentro de uma string.
if (strlen($senha) >= 8 && 
    preg_match('/[A-Z]/', $senha) && 
    preg_match('/[a-z]/', $senha) && 
    preg_match('/[0-9]/', $senha) && 
    preg_match('/[\W]/', $senha)) {
    echo "Senha forte";  // Atende a todos os requisitos
} else {
    echo "Senha fraca";  // Não atende a algum requisito
}
?>


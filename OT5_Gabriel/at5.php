<?php
// Lê todo o conteúdo do arquivo para uma string
$conteudo = file_get_contents("sensivel.txt");

// Codifica o conteúdo em Base64 (NÃO é criptografia segura!)
$criptografado = base64_encode($conteudo);

// Salva o conteúdo codificado em novo arquivo
file_put_contents("sensivel_criptografado.txt", $criptografado);

echo "Arquivo criptografado criado!";

// IMPORTANTE: Base64 não é criptografia, apenas codificação!
// Qualquer pessoa pode decodificar com base64_decode()
?>
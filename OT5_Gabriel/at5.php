<!-- 5. Crie um script que leia um arquivo chamado "sensivel.txt", criptografe o conteúdo e
salve o resultado em um novo arquivo chamado "sensivel_criptografado.txt". -->

<?php
// Lê todo o conteúdo do arquivo para uma string
$conteudo = file_get_contents("sensivel.txt");

// Codifica o conteúdo em Base64 (NÃO é criptografia segura!)
$criptografado = base64_encode($conteudo);

// Salva o conteúdo codificado em novo arquivo
file_put_contents("sensivel_criptografado.txt", $criptografado);

echo "Arquivo criptografado criado!";

// - A função file_put_contents() em PHP serve para criar ou escrever dados em um arquivo.
// - file_get_contents() Essa função lê o conteúdo de um arquivo (ou até uma URL, se permitido) e retorna como string.
// - base64_encode() Essa função codifica dados binários (como imagens, PDFs, etc.) em texto Base64.
?>
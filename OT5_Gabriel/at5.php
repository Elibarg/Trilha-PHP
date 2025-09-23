<?php
$conteudo = file_get_contents("sensivel.txt");
$criptografado = base64_encode($conteudo); // Criptografia simples para exemplo
file_put_contents("sensivel_criptografado.txt", $criptografado);
echo "Arquivo criptografado criado!";
?>

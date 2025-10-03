<?php
$conexao = new mysqli("localhost","usuario","senha","banco_de_dados");
if ($conexao->connect_error) die("falha na conexão: ".$conexao->connect_error);

$email = "usuario@exemplo.com";
$token = bin2hex(random_bytes(16));

$stmt = $conexao->prepare("UPDATE usuarios SET token_recuperacao = ? WHERE email = ?");
$stmt->bind_param("ss",$token, $email);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "token criado";
}else{
    echo "e-mail não encontrado";
};
$conexao-> close();
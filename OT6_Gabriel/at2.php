<?php
$conexao = new mysqli("localhost","usuario","senha","banco_de_dados");
if ($conexao->connect_error) die("falha na conexão: ".$conexao->connect_error);

$idada =18;

$stmt = $conexao->prepare("DELETE FROM usuarios WHERE idade < ?");
mysqli_stmt_bind_param($stmt,"i",$idade);
mysqli_stmt_execute($stmt);

echo "Registro excluidos!";
mysqli_close($conexao);
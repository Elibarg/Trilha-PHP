<?php
$conexao = new mysqli("localhost","usuario","senha","banco_de_dados");
if ($conexao->connect_error) die("falha na conexão: ".$conexao->connect_error);

$id = 1;

$novaIdade =30;
$stmt = $conexao->prepare("UPDATE usuarios SET idade = ? WHERE id = ?");
$stmt->bind_param("ii",$novaIdade, $id);
$stmt->execute();
echo "Registro atualizado";
$conexao->close();

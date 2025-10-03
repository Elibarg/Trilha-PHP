<?php
$conexao = new mysqli("localhost","usuario","senha","banco_de_dados");
if ($conexao->connect_error) die("falha na conexão: ".$conexao->connect_error);

$dados = [
    ["ana",25],
    ["Carlos",32],
    ["Beatriz",29]
];

$stmt = $conexao->prepare("INSERT INT 0 usuarios (nome, idade) VALUES (?,?)");
foreach ($idade as $linha){
    $stmt->bind_param("si",$linha[0],$linha[1]);
}
$stmt->execute();
echo"Múltiplos registros inseridos!";
$conexao-> close();
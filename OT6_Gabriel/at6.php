<?php
$conexao = new mysqli("localhost", "usuario", "senha", "banco_de_dados");
if ($conexao->connect_error) die("Falha na conexão: " . $conexao->connect_error);

$sql = "SELECT u.nome, p.produto 
        FROM usuarios u 
        JOIN pedidos p ON u.id = p.usuario_id";
$result = $conexao->query($sql);

echo "<table border='1'><tr><th>Nome</th><th>Produto</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['nome']}</td><td>{$row['produto']}</td></tr>";
}
echo "</table>";
$conexao->close();
?>

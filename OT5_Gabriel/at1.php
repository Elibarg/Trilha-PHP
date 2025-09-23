<?php
$produto = [
    "Nome"=>"Notebook",
    "Preco"=>4000,
    "Estoque"=>22
];
file_put_contents("produto.json", json_encode($produto,JSON_PRETTY_PRINT));
echo "Arquivo criado";

?>
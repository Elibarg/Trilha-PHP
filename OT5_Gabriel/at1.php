<!-- 1. Crie um array associativo em PHP com informações de um produto. Escreva esse
array em um arquivo JSON chamado "produto.json" -->

<?php
$produto = [  // Array associativo com dados do produto
    "Nome"=>"Notebook",
    "Preco"=>4000,
    "Estoque"=>22
];

// Converte array para JSON e salva em arquivo
file_put_contents("produto.json", json_encode($produto,JSON_PRETTY_PRINT));
// JSON_PRETTY_PRINT formata o JSON com indentação para melhor leitura

echo "Arquivo criado";  // Confirmação de sucesso

// Conteúdo do arquivo produto.json:
// {
//     "Nome": "Notebook",
//     "Preco": 4000,
//     "Estoque": 22
// }
?>
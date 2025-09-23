<?php
$biblioteca = [
    [
        ["titulo" => "Livro A", "autor" => "Autor A"],
        ["titulo" => "Livro B", "autor" => "Autor B"]
    ],
    [
        ["titulo" => "Livro C", "autor" => "Autor C"]
    ]
];
$total = 0;
foreach ($biblioteca as $prateleira) {
    $total += count($prateleira);
}
echo "Total de livros: $total";
?>
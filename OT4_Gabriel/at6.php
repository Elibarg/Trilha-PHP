<!-- 6. Crie uma matriz tridimensional representando uma coleção de livros, onde cada livro
é representado por um array associativo. Utilize a função count() para contar o
número total de livros na coleção. -->

<?php
$biblioteca = [  // Array multidimensional (array de arrays de arrays)
    [  // Primeira prateleira
        ["titulo" => "Livro A", "autor" => "Autor A"],
        ["titulo" => "Livro B", "autor" => "Autor B"]
    ],
    [  // Segunda prateleira  
        ["titulo" => "Livro C", "autor" => "Autor C"]
    ]
];

$total = 0;  // Inicializa contador
foreach ($biblioteca as $prateleira) {  // Itera sobre cada prateleira
    $total += count($prateleira);  // Soma quantidade de livros na prateleira
//-O foreach  é uma estrutura de repetição usada para percorrer todos os elementos de um array
}
echo "Total de livros: $total";  // Exibe resultado: "Total de livros: 3"
?>
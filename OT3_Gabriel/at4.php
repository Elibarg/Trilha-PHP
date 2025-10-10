<!-- 4. Crie um array multidimensional e use um loop foreach para exibir cada elemento na forma de
uma tabela HTML. -->

<?php
    $dados =  // Array multidimensional (array de arrays)
    [
        [  // Primeira pessoa
            "nome" => "João",
            "idade" => 30,
        ],
        [  // Segunda pessoa
            "nome" => "Maria",
            "idade" => 20
        ]
    ];
    
    foreach ($dados as $linha) {       // Itera sobre cada pessoa
       foreach ($linha as $valor) {    // Itera sobre cada propriedade (nome, idade)
        echo "$valor\n";               // Exibe o valor
       }
    }  
    // OUTPUT: João, 30, Maria, 20 (cada um em linha separada)
?>
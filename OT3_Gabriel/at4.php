<?php
    $dados = 
    [
        [
            "nome" => "João",
            "idade" => 30,
        ],
        [
            "nome" => "Maria",
            "idade" => 20
        ]
    ];
    foreach ($dados as $linha) {
       foreach ($linha as $valor) {
        echo "$valor\n";
       }
    }  
        
    
?>
<?php

function cor(){
        $cor = array("Verde","vermelho");
        array_push($cor,"azul","preto","branco");

        return print_r($cor);
    }   
$a = cor();
echo "$a";
?>
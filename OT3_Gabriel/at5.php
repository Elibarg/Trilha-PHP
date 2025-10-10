<?php
 function dividir($a,$b){
    if($b == 0)  // Verifica se divisor é zero
    {
        throw new Exception("Divisão por 0");  // Lança exceção
    }
    return $a / $b;  // Retorna resultado da divisão
 }
 
 try {  // Tenta executar o código que pode gerar erro
    echo dividir(10,0);  // Chama função com divisor zero
 } catch (Exception $e) {  // Captura a exceção se ocorrer
    echo $e->getMessage();  // Exibe mensagem de erro
 }
 // OUTPUT: "Divisão por 0"
?>
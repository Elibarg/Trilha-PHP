<?php
 function dividir($a,$b){
    if($b == 0)
    {
        throw new Exception("Divisão por 0");
    }
    return $a / $b;
 }
 try {
    echo dividir(10,0);
 } catch (Exception $e) {
    echo $e->getMessage();
 }
?>
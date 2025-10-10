<!-- 3. Utilize uma função predefinida do PHP para inverter a ordem das palavras
em uma frase. -->

<?php
function cor(){
    $cor = array("Verde","vermelho");  // Cria array inicial
    
    // Adiciona novos elementos ao array
    array_push($cor,"azul","preto","branco");
    // Array resultante: ["Verde","vermelho","azul","preto","branco"]
    
    return print_r($cor);  
    // print_r exibe representação legível do array
    // Retorna sempre 1 (true)
}   
$a = cor();  // Chama a função e exibe o array
echo "$a";   // Exibe "1" (valor retornado por print_r)
?>
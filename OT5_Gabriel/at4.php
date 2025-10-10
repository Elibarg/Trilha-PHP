<!-- 4. Escreva um código que verifique se um arquivo chamado "documento.txt" existe no
diretório atual. Se existir, exiba uma mensagem indicando sua presença. -->

<?php
// Verifica se o arquivo existe no diretório
if (file_exists("documento.txt")) {
    echo "O arquivo documento.txt existe!";
} else{
    echo "Arquivo não encontrado";
}
// file_exists() retorna true se arquivo existe, false caso contrário
?>
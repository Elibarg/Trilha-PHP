<?php
 try {
   $arquivo = fopen("arquivo_inexistente.txt","r");  // Tenta abrir arquivo
   if (!$arquivo) {
      throw new Exception("arquivo não encontrado", 1);  // Lança exceção se falhar
   }
 } catch (exception $e) {
   echo $e->getMessage();  // Captura e exibe a mensagem de erro
 }
 // OUTPUT: "arquivo não encontrado"
?>
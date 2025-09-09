<?php
 try {
   $arquivo = fopen("arquivo_inexistente.txt","r");
   if (!$arquivo) {
      throw new Exception("arquivo não encontrado", 1);
      
   }
 } catch (exception $e) {
   echo $e->getMessage();
 }
?>
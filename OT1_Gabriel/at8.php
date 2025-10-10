<!-- 8. Construa um sistema simples de login que solicite um nome de usuário e senha e
exiba uma mensagem de boas-vindas se as credenciais estiverem corretas. -->

<?php
$nomeCorreto = "jo";
$senhaCorreta =43;
$nomeDigitada = "jo";
$senhaDigitada =43;
if ($nomeCorreto == $nomeCorreto && $senhaCorreta == $senhaDigitada) {
    echo " bem vindo";
}else
{
    echo "Credenciais inválidas.";
}
?>
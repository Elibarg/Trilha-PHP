<?php
class produto {
    public $preco;
    public $nome;
}
$produto1 = new produto();
$produto1 ->preco = 2;
$produto1 ->nome = "a";
echo $produto1 ->preco;
echo $produto1 ->nome;

?>
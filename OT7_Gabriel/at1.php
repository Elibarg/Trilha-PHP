<?php
class Produto {
    public $nome;
    public $preco;

    public function exibir() {
        return "Produto: $this->nome, Preço: R$ $this->preco";
    }
}

$produto = new Produto();
$produto->nome = "Notebook";
$produto->preco = 2500;
echo $produto->exibir();
?>
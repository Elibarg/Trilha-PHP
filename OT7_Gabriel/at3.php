<?php
class contaB{
 private $Conta = "";
 public function depositar($senha){
    $this->Conta = $senha;
 }
 public function consultarConta(){
    return "Conta: $this->Conta ";
 }
};
$conta = new contaB();

$conta->depositar("rer");
echo $conta->consultarConta();
<?php
class ContaBancaria {
    private $saldo = 0;
    private $numeroConta;

    public function __construct($numeroConta) {
        $this->numeroConta = $numeroConta;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria("12345");
$conta->depositar(500);
echo $conta->sacar(200) ? "Saque realizado" : "Saldo insuficiente";
echo "<br>Saldo: R$ " . $conta->getSaldo();
?>
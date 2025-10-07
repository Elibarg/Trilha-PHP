<?php
class Cliente {
    private $senha;

    public function setSenha($senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function verificarSenha($senha) {
        return password_verify($senha, $this->senha);
    }
}

$cliente = new Cliente();
$cliente->setSenha("123456");
echo $cliente->verificarSenha("123456") ? "Senha correta" : "Senha incorreta";
?>
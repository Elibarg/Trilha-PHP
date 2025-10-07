<?php
interface Veiculo {
    public function mover();
}

class Carro implements Veiculo {
    public function mover() {
        return "Carro andando na estrada";
    }
}

class Aviao implements Veiculo {
    public function mover() {
        return "Avião voando nos céus";
    }
}

$veiculos = [new Carro(), new Aviao()];
foreach ($veiculos as $v) {
    echo $v->mover() . "<br>";
}
?>
<?php
abstract class Forma {
    abstract public function calcularArea();
}

class Quadrado extends Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * $this->raio * $this->raio;
    }
}

$quadrado = new Quadrado(5);
$circulo = new Circulo(3);
echo "Área do quadrado: " . $quadrado->calcularArea() . "<br>";
echo "Área do círculo: " . $circulo->calcularArea();
?>
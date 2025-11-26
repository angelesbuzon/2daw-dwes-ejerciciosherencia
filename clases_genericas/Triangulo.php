<?php

class Triangulo extends Figura {
    public float $base;
    public float $altura;

    public function __construct($base, $altura, $color="ninguno") {
        parent::__construct($color);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(): float {
        // A = (base * altura) / 2
        $area = ($this->base * $this->altura) / 2;
        return $area;
    }
}

?>
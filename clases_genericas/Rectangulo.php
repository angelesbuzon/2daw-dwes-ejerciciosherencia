<?php

class Rectangulo implements Calculable {
    public float $ladoA;
    public float $ladoB;

    public function __construct($ladoA, $ladoB) {
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
    }

    public function calcularArea(): float {
        $area = $this->ladoA * $this->ladoB;
        return $area;
    }

    public function calcularPerimetro(): float {
        $perimetro = ($this->ladoA * 2) + ($this->ladoB * 2);
        return $perimetro;
    }
}

?>
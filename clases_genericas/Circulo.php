<?php

class Circulo implements Calculable {
    public float $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea(): float {
        // A = PI * r^2
        $area = 3.14 * ($this->radio * 2);
        return $area;
    }

    public function calcularPerimetro(): float {
        // P = 2 * PI * r
        $perimetro = 2 * 3.14 * $this->radio;
        return $perimetro;
    }
}

?>
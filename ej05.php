<?php

/**
 * EJERCICIO 5: Interfaz
 * Define una interfaz Calculable con métodos calcularArea() y calcularPerimetro(). Implementa esta interfaz en clases Rectangulo y Circulo.
 */

// CLASES
interface Calculable {
    public function calcularArea(): float;

    public function calcularPerimetro(): float;
}

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

// EJECUCIÓN
$rectangulito = new Rectangulo(5, 2.5);
echo "Área de mi rectangulito: " . $rectangulito->calcularArea() . "\n";
echo "Perímetro de mi rectangulito: " . $rectangulito->calcularPerimetro() . "\n";

$circulito = new Circulo(7);
echo "Área de mi circulito: " . $circulito->calcularArea() . "\n";
echo "Perímetro de mi circulito: " . $circulito->calcularPerimetro() . "\n";

?>
<?php

/**
 * EJERCICIO 5: Interfaz
 * Define una interfaz Calculable con métodos calcularArea() y calcularPerimetro(). Implementa esta interfaz en clases Rectangulo y Circulo.
 */

include "./clases_genericas/Calculable.php";
include "./clases_genericas/Rectangulo.php";
include "./clases_genericas/Circulo.php";

$rectangulito = new Rectangulo(5, 2.5);
echo "Área de mi rectangulito: " . $rectangulito->calcularArea() . "\n";
echo "Perímetro de mi rectangulito: " . $rectangulito->calcularPerimetro() . "\n";

$circulito = new Circulo(7);
echo "Área de mi circulito: " . $circulito->calcularArea() . "\n";
echo "Perímetro de mi circulito: " . $circulito->calcularPerimetro() . "\n";

?>
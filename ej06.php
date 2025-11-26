<?php

/**
 * EJERCICIO 6: Clase abstracta
 * Crea una clase abstracta Figura con:
 * • Propiedad protegida: color
 * • Método abstracto: calcularArea()
 * • Método normal: obtenerColor()
 * Crea clases Triangulo y Cuadrado que hereden de Figura.
 */

include "./clases_genericas/Figura.php";
include "./clases_genericas/Triangulo.php";
include "./clases_genericas/Cuadrado.php";

$mi_triangulo = new Triangulo(2.5, 5, "naranja");
echo "Área de mi triángulo: " . $mi_triangulo->calcularArea() . "\n";
echo "Color de mi triángulo: " . $mi_triangulo->obtenerColor() . "\n";

$mi_cuadrado = new Cuadrado(4);
echo "Área de mi cuadrado: " . $mi_cuadrado->calcularArea() . "\n";
echo "Color de mi cuadrado: " . $mi_cuadrado->obtenerColor() . "\n";

?>
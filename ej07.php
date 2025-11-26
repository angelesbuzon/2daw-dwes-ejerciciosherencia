<?php

/**
 * Ejercicio 7: Trait
 * Crea un trait Timestamp que añada propiedades fechaCreacion y fechaModificacion,
 * con métodos para actualizarlas.
 * Úsalo en una clase Articulo.
 */

include "./clases_genericas/Timestamp.php";
include "./clases_genericas/Articulo.php";

$producto = new Articulo("Libro");

echo "===Primera prueba===\n";
$producto->marcarCreacion();

echo "Fecha de creación: " . $producto->obtenerFechaCreacion() . "\n";
echo "Fecha de modificación por consiguiente: " . $producto->obtenerFechaModificacion() . "\n";

$producto->marcarCreacion(); // No deja hacerlo

sleep(5); // Espera x segundos para que la fecha de modificación que se marca después sea distinta

echo "===Segunda prueba===\n";
$producto->marcarModificacion();
echo "Fecha de creación: " . $producto->obtenerFechaCreacion() . "\n";
echo "Fecha de modificación nueva: " . $producto->obtenerFechaModificacion() . "\n";

?>
<?php

/**
 * EJERCICIO 1: Clase Básica
 * Crea una clase Vehiculo con propiedades marca, modelo y año.
 * Incluye un constructor y un método para mostrar la información completa del vehículo.
 */

include 'clases/Vehiculo.php';

$mi_coche = new Vehiculo("Toyota", "S100", "2005");

echo $mi_coche->obtenerInformacion();

?>
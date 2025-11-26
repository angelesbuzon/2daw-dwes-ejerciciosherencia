<?php

/**
 * EJERCICIO 2: Herencia Simple
 * Extiende la clase Vehiculo para crear una clase Coche
 * que añada la propiedad numeroPuertas.
 * Sobrescribe el método de información para incluir este dato.
 */

include "./clases_genericas/Vehiculo.php";
include "./clases_genericas/Coche.php";

$mi_coche = new Coche("Seat", "A150", "1990", "4"); 
echo $mi_coche->obtenerInformacion();

?>
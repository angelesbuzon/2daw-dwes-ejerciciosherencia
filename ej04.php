<?php

/**
 * Ejercicio 4: Property Hooks (PHP 8.4)
 * Crea una clase Empleado con property hooks para:
 * • Validar que el salario sea mayor a 0
 * • Convertir el nombre a mayúsculas al leerlo
 * • Calcular el salario anual automáticamente
 */

include "/clases/Empleado.php";

try {
    $primer_empleado = new Empleado();
} catch ($e) {

}


?>
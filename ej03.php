<?php

/**
 * Ejercicio 3: Visibilidad
 * Crea una clase CuentaBancaria con:
 * - Propiedad privada: saldo
 * - Métodos públicos: depositar(), retirar(), consultarSaldo()
 * - Validaciones: no permitir saldo negativo
 */

include "./clases_genericas/CuentaBancaria.php";

$mi_cuenta = new CuentaBancaria();

echo $mi_cuenta->obtenerInformacion();

if ($mi_cuenta->retirar(50)) {
    echo "Se han retirado 50 EUR\n";
} else {
    echo "No se ha podido retirar 50 EUR\n";
}

if ($mi_cuenta->depositar(100)) {
    echo "Se han depositado 100 EUR\n";
} else {
    echo "No se ha podido depositar 100 EUR\n";
}

if ($mi_cuenta->depositar(-20)) {
    echo "Se han depositado -20 EUR\n";
} else {
    echo "No se ha podido depositar -20 EUR\n";
}

echo $mi_cuenta->obtenerInformacion();

?>
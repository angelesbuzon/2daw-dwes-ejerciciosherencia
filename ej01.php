<?php

/**
 * EJERCICIO 1
 * Crea una clase Vehiculo con propiedades marca, modelo y año.
 * Incluye un constructor y un método para mostrar la información completa del vehículo.
 */

class Vehiculo {
    protected string $marca;
    protected string $modelo;
    protected int $ano;

    public function __construct($mar, $mod, $a) {
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->ano = $a;
    }

    public function obtenerInformacion() {
        echo "=== Información del vehículo ===\n";
        echo "Marca: $this->marca\n";
        echo "Modelo: $this->modelo\n";
        echo "Año: $this->ano\n";
    }
    
}

$mi_coche = new Vehiculo("Toyota", "S100", "2005");

$mi_coche->obtenerInformacion();

?>
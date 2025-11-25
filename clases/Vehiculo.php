<?php

class Vehiculo {
    protected string $marca;
    protected string $modelo;
    protected int $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function obtenerInformacion() {
        $informacion = "=== Información del vehículo ===\n";
        $informacion .= "Marca: $this->marca\n";
        $informacion .= "Modelo: $this->modelo\n";
        $informacion .= "Año: $this->ano\n";

        return $informacion;
    }
    
}

?>
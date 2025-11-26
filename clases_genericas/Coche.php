<?php

class Coche extends Vehiculo {
    protected int $numeroPuertas;

    public function __construct($marca, $modelo, $ano, $numeroPuertas) {
        parent::__construct($marca, $modelo, $ano);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function obtenerInformacion() {
        $informacion = parent::obtenerInformacion();
        $informacion .= "Número de puertas: $this->numeroPuertas\n";
        
        return $informacion;
    }
}

?>
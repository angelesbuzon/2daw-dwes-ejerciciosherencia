<?php

class Empleado {
    public string $nombre {
        get => strtoupper($this->nombre); 
    }

    public float $salario_anual = 0; // 0 por defecto

    public float $salario = 0 {
        set(float $cantidad) {
            if ($cantidad < 0) {
                throw new Exception("El salario no puede ser negativo");
            }

            $this->salario = $cantidad;
            $this->salario_anual = $this->salario * 12;
        }
    }

    public function __construct($nombre="Desconocido") {
        // El nombre es "Desconocido" si no se especifica en el constructor
        $this->nombre = $nombre;
    }
}

?>
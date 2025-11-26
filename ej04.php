<?php

/**
 * Ejercicio 4: Property Hooks (PHP 8.4)
 * Crea una clase Empleado con property hooks para:
 * • Validar que el salario sea mayor a 0
 * • Convertir el nombre a mayúsculas al leerlo
 * • Calcular el salario anual automáticamente
 */

// CLASES
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

// EJECUCIÓN
try {
    $primer_empleado = new Empleado();
    $primer_empleado->salario = 1300;
    echo "Salario de $primer_empleado->nombre: $primer_empleado->salario EUR ($primer_empleado->salario_anual EUR al año)\n";

    $segundo_empleado = new Empleado("Juanita");
    $segundo_empleado->salario = 2000;
    echo "Salario de $segundo_empleado->nombre: $segundo_empleado->salario EUR ($segundo_empleado->salario_anual EUR al año)\n";

    // Lo siguiente dará error
    $tercer_empleado = new Empleado("Atanasio");
    $tercer_empleado->salario = -5;
    echo "Salario de $tercer_empleado->nombre: $tercer_empleado->salario EUR ($tercer_empleado->salario_anual EUR al año)\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}



?>
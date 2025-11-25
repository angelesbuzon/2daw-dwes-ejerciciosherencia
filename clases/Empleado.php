<?php

/**
 * Ejercicio 4: Property Hooks (PHP 8.4)
 * Crea una clase Empleado con property hooks para:
 * • Validar que el salario sea mayor a 0
 * • Convertir el nombre a mayúsculas al leerlo
 * • Calcular el salario anual automáticamente
 */

class Empleado {
    public string $nombre {
        get => strtoupper($this->nombre); // Devuelve el nombre en mayúsculas
    }

    public float $salario {
        set(float $cantidad) {
            if ($cantidad < 0) {
                throw new Exception("El salario no puede ser negativo");
            }

            $this->salario = $cantidad;
        }
    }




}

?>
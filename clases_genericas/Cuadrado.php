<?php

class Cuadrado extends Figura {
    public float $lado;

    public function __construct($lado, $color="no especificado") {
        parent::__construct($color);
        $this->lado = $lado;
    }

    public function calcularArea(): float {
        return $this->lado * $this->lado;
    }
}

?>
<?php

abstract class Figura {
    protected string $color;

    public function __construct(string $color) {
        $this->color = $color;
    }

    abstract public function calcularArea(): float;

    public function obtenerColor(): string {
        return $this->color;
    }
}

?>
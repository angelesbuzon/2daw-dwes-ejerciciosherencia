<?php

class Articulo {
    use Timestamp;

    public string $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

?>
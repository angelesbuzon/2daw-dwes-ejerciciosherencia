<?php

trait Timestamp {
    public string $fecha_creacion = "";
    public string $fecha_modificacion = "";

    public function marcarCreacion() {
        // Uso == "" porque si la declaro nula y luego aquí intento is_null() me da error:
        // PHP Fatal error:  Uncaught Error: Typed property Articulo::$fecha_creacion must not be accessed before initialization
        if ($this->fecha_creacion == "") {
            $this->fecha_creacion = date("Y-m-d H:i:s");
            $this->fecha_modificacion = $this->fecha_creacion;
        } else {
            echo("No se puede modificar la fecha de creación\n");
        }
        
    }

    public function obtenerFechaCreacion() {
        return $this->fecha_creacion;
    }

    public function marcarModificacion() {
        $this->fecha_modificacion = date("Y-m-d H:i:s");
    }

    public function obtenerFechaModificacion() {
        return $this->fecha_modificacion;
    }
}

?>
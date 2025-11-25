<?php

class CuentaBancaria {
    private float $saldo;

    public function __construct($saldoInicial=0) {
        // Si no se especifica, se crea con 0 EUR
        $this->saldo = $saldoInicial;
    }

    public function depositar($ingreso) {
        if ($this->importeEsPositivo($ingreso)) {
            $this->saldo += $ingreso;
            return true;
        } else {
            return false;
        }
    }

    public function retirar($egreso) {
        if ($this->importeEsPositivo($egreso)) {
            if ($this->saldo - $egreso < 0) {
                return false;
            } else {
                $this->saldo -= $egreso;
                return true;
            }
        } else {
            return false;
        }
    }

    private function importeEsPositivo($importe) {
        if ($importe > 0) return true;
        else return false;
    }

    public function obtenerInformacion() {
        $informacion = "Saldo de la cuenta: $this->saldo EUR\n";

        return $informacion;
    }
}

?>
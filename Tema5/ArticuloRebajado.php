<?php

final class ArticuloRebajado extends Articulo {
    private $rebaja;

    function __construct($pNombre, $pPrecio, $pRebaja) {
        parent::__construct($pNombre);
        parent::__construct($pPrecio);
        $this->rebaja = $pRebaja;
    }

    private function calculaDescuento() {
        return $pPrecio * $rebaja / 100;
    }

    public function precioRebajado() {
        return $pPrecio - $this->calculaDescuento();
    }

    function __toString() {
        parent::__toString();
        return "La rebaja es: " . $this->rebaja . " %";
        return "El descuento es " . self::calculaDescuento() . "€";
    }
}

?>
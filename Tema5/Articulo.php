<?php

Class Articulo {
    protected $nombre;
    protected $precio;

    function __construct($pNombre, $pPrecio) {
        $this->nombre = $pNombre;
        $this->precio = $pPrecio;
    }

    function getPrecio() {
        return $this->$precio;
    }

    function setPrecio($pPrecio) {
        if (is_numeric($pPrecio)) {
            $this->precio = $pPrecio;
        }
    }

    function __toString() {
        return "Nombre: " . $this->nombre , "<br />" . "Precio: " . $this->precio . "&euro;<br />";
    }
}


?>
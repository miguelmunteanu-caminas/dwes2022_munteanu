<?php

Class Imagen {

    protected $src;
    protected $border;
    private $ruta_images = "images/";

    function __construct($src, $border = 0) {
        $this->setSrc($src);
        $this->setBorder($border);
    }

    /*
    Si en vez de setBorder() utilizo $this->border = " ... ", si el valor es correcto, la imagen se muestra correctamente.
    Si embargo, si el valor no es correcto, la imagen no se muestra.
    */

    function setSrc($ruta) {
        $ruta_real = $_SERVER["DOCUMENT_ROOT"] . "/Tema5/" . $this->ruta_images . $ruta . ".jpg";

        if (file_exists($ruta_real)) {
            $this->src = $ruta_real;
        } else {
            die("ERROR: La ruta ( " . $ruta_real . ") no existe.");
        }
    }

    function setBorder($pBorder) {
        if (is_int($pBorder)) {
            $this->border = $pBorder;
        } else {
            die("ERROR: El borde no es entero.");
        }
    }

    function __toString() {
        return "<img src='" . $this->src . ".jpg' border ='" . $this->border . "' />";
    }
}


?>
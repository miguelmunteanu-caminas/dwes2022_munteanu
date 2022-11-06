<?php

Class Imagen {

    private $src;
    private $border;
    private $ruta_images = "images/";

    function __construct($src, $border = 0) {
        $this->src = $src;
        $this->border = $border;

        $this->src = $this->ruta_images . $src;
    }

    function __toString() {
        return "<img src='" . $this->src . ".jpg' border ='" . $this->border . "' />";
    }
}


?>
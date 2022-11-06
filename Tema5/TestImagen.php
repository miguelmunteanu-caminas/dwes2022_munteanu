<?php

require_once "Imagen.php";

$img = new Imagen("ravel");

echo $img;

$img2 = new Imagen("scriabin", 10);

echo $img2;

$img2->src = "beethoven"; // aquí compruebo que no se puede acceder a las variables privadas

?>
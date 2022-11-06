<?php

require_once "ImagenMejorada.php";

$img = new Imagen("ravel");

echo $img;

$img2 = new Imagen("scriabin", 10);

echo $img2;

$img2->setSRC("beethoven"); // aquí compruebo que no existe la ruta imagen beethoven.jpg
$img2->setBorder(3.14); // aquí compruebo que no funciona con borde no entero

?>
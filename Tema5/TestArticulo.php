<?php

//require_once "Articulo.php";
require_once "ArticuloRebajado.php";

$articuloRebajado = new ArticuloRebajado("Bicicleta", 352.10, 20);

echo $articuloRebajado;
echo "El precio del artículo rebajado es ";
echo  $articuloRebajado->precioRebajado();
echo " € <br/>";
echo var_dump($articuloRebajado);

?>
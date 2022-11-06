<?php

require_once "Session.php";


$session = new Session();

$session->setAttribute("nombre", "Miguel Ángel");

echo "Valor de el atributo nombre: " . $session->getAttribute("nombre") . "<br/>";

$session->deleteAttribute("nombre");

echo "Valor de el atributo nombre: " . $session->getAttribute("nombre") . "<br/>";

$session->destroySession();

?>
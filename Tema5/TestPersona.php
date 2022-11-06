<?php

require_once "Persona.php";

$persona = new Persona("Miguel Ángel", "Munteanu", 21);

if ($persona->mayorEdad()) {
    echo $persona->nombreCompleto(). " es mayor de edad";
} else {
    echo $persona->nombreCompleto(). " no es mayor de edad";
}


?>
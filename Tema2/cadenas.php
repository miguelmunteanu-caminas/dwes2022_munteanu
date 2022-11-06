<?php
    $nombre = "Hola, soy Miguel.\n";

    echo $nombre;
    echo strlen($nombre);
    echo strtoupper($nombre);
    echo strtolower($nombre);

    $prefijo = "H";
    $prefijoEnNombre = strpos($nombre, $prefijo);

    if ($prefijoEnNombre == true) {
        echo "El nombre empieza por el prefijo";
    } else {
        echo "El nombre no empieza por el prefijo";
    }

    echo substr_count($nombre, 'a');

    $posicion = stripos($nombre, 'a');

    if ($posicion !== null) {
        echo($posicion);
    } else {
        echo "No hay ninguna letra a";
    }

    echo str_ireplace("o", "0", $nombre);

    $url = 'http://username:password@hostname:9090/path?arg=value';

    echo(parse_url($url, PHP_URL_SCHEME));
    echo(parse_url($url, PHP_URL_USER));
    echo(parse_url($url, PHP_URL_PATH));
    echo(parse_url($url, PHP_URL_QUERY));
?>
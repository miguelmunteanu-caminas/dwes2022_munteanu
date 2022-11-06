<?php

    $tabla = "alumnos";
    $campos = array("nombre" => "Juan", "apellidos" => "Martínez");

    function insert($tabla, $campos) {
        INSERT INTO alumnos (nombre, apellidos) values (:nombre, :apellidos);
    }

    function insertReferencia($tabla, $campos) {
        INSERT INTO alumnos (nombre, apellidos) values (:nombre, :apellidos);
    }

    $tabla = "alumnos";
    $campos = array("id" => "1", "nombre" => "Juan", "apellidos" => "Martínez");

    function update($tabla, $campos) {
        UPDATE alumnos SET nombre=:nombre, apellidos=:apellidos WHERE id = :id
    }

?>
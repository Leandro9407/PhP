<?php

    include_once('conexion_bd_profesor.php');

    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $asignatura=$_POST['asignatura'];

    $conexion->query("INSERT INTO profesores(documento, nombre, apellido, telefono, email, asignatura) value ($documento, '$nombre', '$apellido', $telefono, '$email', '$asignatura')");

    echo "Registrado con exito";

?>
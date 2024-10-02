<?php

    include_once('conexion_bd.php');

    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $productos=$_POST['productos'];
    $cantidad=$_POST['cantidad'];
    $efectivo=$_POST['efectivo']

    $conexion->query("INSERT INTO clientes(documento, nombre, telefono, email, productos, cantidad, efectivo) value ($documento)");
?>
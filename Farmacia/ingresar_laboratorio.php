<?php

    include_once('conexion_bd_farmacia.php');

    $nombre_l=$_POST['nombre_l'];
    $direccion=$_POST['direccion'];
    $ciudad=$_POST['ciudad'];
    $telefono=$_POST['telefono'];

    $conexion->query("INSERT INTO laboratorio(nombre_l, direccion, ciudad, telefono) value ('$nombre_l', '$direccion', '$ciudad', $telefono)");

    header("location: index.php");
?>
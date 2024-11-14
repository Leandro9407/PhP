<?php

    include_once('conexion_bd_farmacia.php');

    $nombre_l=$_POST['nombre_l'];
    $direccion=$_POST['direccion'];
    $ciudad=$_POST['ciudad'];
    $telefono=$_POST['telefono'];

    $conexion->query("UPDATE laboratorio SET nombre_l='$nombre_l', direccion='$direccion', ciudad='$ciudad', telefono='$telefono' WHERE nombre_l='$nombre_l'");

    header("Location: consultar_laboratorio.php")

?>
<?php
    include_once('conexion_bd_farmacia.php');

    $nombre=$_POST['nombre'];
    $nombre_l=$_POST['nombre_l'];
    $cantidad=$_POST['cantidad'];

    $conexion->query("UPDATE inventario SET nombre='$nombre', nombre_l='$nombre_l', cantidad='$cantidad' WHERE nombre='$nombre'");

    header("Location: index.php");

?>
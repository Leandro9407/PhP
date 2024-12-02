<?php
    include_once('conexion_bd_farmacia.php');

    $nombre=$_GET['nombre'];

    $conexion->query("DELETE FROM inventario WHERE nombre='$nombre'");

    header("Location: index.php");

?>
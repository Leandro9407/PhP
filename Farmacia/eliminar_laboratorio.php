<?php
    include_once('conexion_bd_farmacia.php');

    $nombre_l=$_GET['nombre_l'];

    $conexion->query("DELETE FROM laboratorio WHERE nombre_l='$nombre_l'");

    header("Location: consultar_laboratorio.php");
?>
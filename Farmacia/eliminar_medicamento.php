<?php
    include_once('conexion_bd_farmacia.php');

    $nombre=$_GET['nombre'];

    $conexion->query("DELETE FROM medicamento WHERE nombre='$nombre'");

    header("Location: consultar_medicamentos.php");
?>
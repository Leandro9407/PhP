<?php
    include_once('conexion_bd_farmacia.php');

    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $expedicion=$_POST['expedicion'];
    $vencimiento=$_POST['vencimiento'];

    $conexion->query("UPDATE medicamento SET codigo='$codigo', nombre='$nombre', expedicion='$expedicion', vencimiento='$vencimiento' WHERE codigo='$codigo'");

    header("Location: consultar_medicamentos.php")
?>
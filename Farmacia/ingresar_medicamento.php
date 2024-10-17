<?php

    include_once('conexion_bd_farmacia.php');

    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $expedicion=$_POST['expedicion'];
    $vencimiento=$_POST['vencimiento'];
    
    
    $conexion->query("INSERT INTO medicamento(codigo, nombre, expedicion, vencimiento) value ($codigo, '$nombre', '$expedicion', '$vencimiento')");

    header("location: index.php");
?>
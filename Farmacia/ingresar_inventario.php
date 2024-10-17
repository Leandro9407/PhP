<?php   

    include_once('conexion_bd_farmacia.php');

    $nombre=$_POST['nombre'];
    $nombre_l=$_POST['nombre_l'];
    $cantidad=$_POST['cantidad'];

    $conexion->query("INSERT INTO inventario(nombre, nombre_l, cantidad) value ('$nombre', '$nombre_l', $cantidad)");

    header("location: index.php");

?>
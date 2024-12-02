<?php
    include_once('conexion_tienda.php');

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $costo=$_POST['costo'];
    $imagen=$_POST['imagen'];

    $conexion->query("UPDATE productos SET id='$id', nombre='$nombre', precio='$precio', costo='$costo', imagen='$imagen' WHERE id='$id'");

    header("Location: consultar_productos.php");

?>    


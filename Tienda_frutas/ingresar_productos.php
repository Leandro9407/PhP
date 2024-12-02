<?php
    include_once('conexion_tienda.php');

    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $costo=$_POST['costo'];
    $imagen=$_POST['imagen'];

$conexion->query("INSERT INTO productos(nombre, precio, costo, imagen) value ('$nombre', $precio,
$costo, '$imagen')");

    header("Location: formulario_productos.php");

?>    



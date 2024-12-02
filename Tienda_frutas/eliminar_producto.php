<?php
    include_once('conexion_tienda.php');

    $id=$_GET['id'];

    $conexion->query("DELETE FROM productos WHERE id='$id'");

    header("Location: consultar_productos.php");

?>    
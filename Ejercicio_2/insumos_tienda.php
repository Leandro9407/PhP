<?php

    include_once('conexion_bd.php');

    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $productos=$_POST['productos'];
    $cantidad=$_POST['cantidad'];
    $efectivo=$_POST['efectivo'];
    
    if ($productos=='Monitor'){
        $monto = $cantidad * 400000;
        $iva = $monto * 0.19;
        $cambio = $efectivo - $monto;
    } elseif ($productos=='Teclado'){
        $monto = $cantidad * 25000;
        $iva = $monto * 0.19;
        $cambio = $efectivo - $monto;
    } elseif ($productos=='Board'){
        $monto = $cantidad * 250000;
        $iva = $monto * 0.19;
        $cambio = $efectivo - $monto;
    } elseif ($productos=='Mouse'){
        $monto = $cantidad * 18000;
        $iva = $monto * 0.19;
        $cambio = $efectivo - $monto;
    } elseif ($productos=='Cámara'){
        $monto = $cantidad * 25000;
        $iva = $monto * 0.19;
        $cambio = $efectivo - $monto;
    }
    

    $conexion->query("INSERT INTO clientes(documento, nombre, telefono, productos, cantidad, efectivo, cambio, iva, monto) value ($documento, '$nombre', $telefono, '$email', $productos, $cantidad, $efectivo, $cambio, $iva, $monto)");

    echo "Operación exitosa"
?>
<?php

    include_once('conexion_bd_grupo.php');

    $nombre=$_POST['nombre'];
    $director=$_POST['director'];
    $grado=$_POST['grado'];
    $año=$_POST['año'];

    $conexion->query("INSERT INTO grupos(nombre, director, grado, año) value ('$nombre', '$director', $grado, $año)");

    echo "Guardado con exito";

?>
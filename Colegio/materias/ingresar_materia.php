<?php

    include_once('conexion_bd_materia.php');

    $asignatura=$_POST['asignatura'];
    $profesor=$_POST['profesor'];
    $grado=$_POST['grado'];


    $conexion->query("INSERT INTO materias(asignatura, profesor, grado) value ('$asignatura', '$profesor', $grado)");

    echo "Operación exitosa";
?>
<?php

    include_once('./estudiante/conexion_estudiante.php');

    $documento=$_GET['documento'];

    $consulta=$conexion->query("SELECT * FROM estudiante where documento='$documento'");

    if ($row=$consulta->fetch_array()){
        $nombre=$row['nombre'];

        echo "Nombre: ", $nombre;

    } else{
        echo "El estudiante no existe";
    }

?>
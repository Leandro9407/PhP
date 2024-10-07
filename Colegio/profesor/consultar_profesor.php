<?php

    include_once('conexion_bd_profesor.php');

    $registro=$conexion->query("select * from profesores");

    while ($row=$registro->fetch_array()){

        $documento=$row['documento'];
        $nombre=$row['nombre'];
        $apellido=$row['apellido'];
        $telefono=$row['telefono'];
        $email=$row['email'];
        $asignatura=$row['asignatura'];

        echo "Documento: ", $documento. '<br>';
        echo "Nombre: ", $nombre. '<br>';
        echo "apellido: ", $apellido. '<br>';
        echo "Teléfono: ", $telefono. '<br>';
        echo "Email: ", $email. '<br>';
        echo "Asignatura: ", $asignatura. '<br>';
        echo '<br>';
    }




?>
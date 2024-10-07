<?php

    include_once('conexion_bd_grupo.php');

    $registro=$conexion->query("select * from grupos");

    while ($row=$registro->fetch_array()){

        $nombre=$row['nombre'];
        $director=$row['director'];
        $grado=$row['grado'];
        $año=$row['año'];

        echo "Nombre: ", $nombre. '<br>';
        echo "director de grupo: ", $director. '<br>';
        echo "Grado: ", $grado. '<br>';
        echo "Año: ", $año. '<br>';

    }

?>
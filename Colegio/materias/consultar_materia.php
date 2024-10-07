<?php

    include_once('conexion_bd_materia.php');

    $registro=$conexion->query("select * from materias");

    while ($row=$registro->fetch_array()){

        $asignatura=$row['asignatura'];
        $profesor=$row['profesor'];
        $grado=$row['grado'];

        echo "Nombre de la materia: ", $asignatura. '<br>';
        echo "Profesor: ", $profesor. '<br>';
        echo "Grado: ", $grado. '<br>';
        echo '<br>';
           

    }

?>
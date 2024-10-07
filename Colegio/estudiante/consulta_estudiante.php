<?php   

    include_once('conexion_estudiante.php');

    $registro=$conexion->query("select * from estudiante");

    while ($row=$registro->fetch_array()){

        $documento=$row['documento'];
        $nombre=$row['nombre'];
        $apellido=$row['apellido'];
        $email=$row['email'];
        $edad=$row['edad'];
        $promedio=$row['promedio'];
        $estado=$row['estado'];
        $grupo=$row['grupo'];

        echo "Documento: ", $documento. '<br>';
        echo "Nombre: ", $nombre. '<br>';
        echo "Apellido: ", $apellido. '<br>';
        echo "Email: ", $email. '<br>';
        echo "Edad: ", $edad. '<br>';
        echo "Promedio: ", $promedio. '<br>';
        echo "Estado: ", $estado. '<br>';
        echo "Grupo: ", $grupo. '<br>';
        echo '<br>';
    }


?>
<?php

    include_once('conexion_estudiante.php');

    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $edad=$_POST['edad'];
    $nota_1=$_POST['nota_1'];
    $nota_2=$_POST['nota_2'];
    $nota_3=$_POST['nota_3'];

    $promedio=($nota_1+$nota_2+$nota_3)/3;
    

    if ($promedio>=3){
        $estado='Aprobado';
        echo "Aprobado", '<br>';
        echo "Promedio: ", $promedio. '<br>';
    } else {
        $estado='Reprobado';
        echo "Reprobado", '<br>';
        echo "Promedio: ", $promedio. '<br>';
    }
    

    $conexion->query("INSERT INTO estudiante(documento, nombre, apellido, email, edad, promedio, estado) value ($documento, '$nombre', '$apellido', '$email', $edad, $promedio, '$estado')");

    echo "El estudiante ha sido ingresado con exito";
?>
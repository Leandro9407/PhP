<?php

    include_once('conexion_estudiante.php');

    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $edad=$_POST['edad'];
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];
    $grupo=$_POST['grupo'];

    $promedio=($nota1+$nota2+$nota3)/3;
    

    if ($promedio>=3){
        $estado='Aprobado';
        echo "Aprobado", '<br>';
        echo "Promedio: ", $promedio. '<br>';
    } else {
        $estado='Reprobado';
        echo "Reprobado", '<br>';
        echo "Promedio: ", $promedio. '<br>';
    }
    

    $conexion->query("INSERT INTO estudiante(documento, nombre, apellido, email, edad, promedio, estado, grupo) value ($documento, '$nombre', '$apellido', '$email', $edad, $promedio, '$estado', '$grupo')");

    echo "El estudiante ha sido ingresado con exito";
?>
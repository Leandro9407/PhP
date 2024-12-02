<?php

    session_start();
    include_once('conexion_tienda.php');

    if (empty($_SESSION['nombre_user'])){
        header('Location: login.php');
        exit();
    }

    $nombre_sesion=$_SESSION['nombre_user'];
    $tipo_sesion=$_SESSION['tipo_usuario']; 

    if ($tipo_sesion=='administrador'){
        echo '<i class="bx bxs-castle fs-3"></i> '. $nombre_sesion=$_SESSION['nombre_user'], " ";
        echo $tipo_sesion=$_SESSION['tipo_usuario']; 
    } else if ($tipo_sesion=='cliente'){
        echo '<i class="bx bx-user-circle fs-3"></i> '. $nombre_sesion=$_SESSION['nombre_user'];
    }

?>    


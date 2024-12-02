<?php  #para trear el nombre y el tipo | al principio

    session_start();
    include_once('conexion_basedatos.php');

    if (empty($_SESSION['nombre_user'])){
        header('Location: login.php');
        exit();
    }

    #capturar el nombre del usuario que inicia sesion
    $nombre_sesion=$_SESSION['nombre_user'];

    #capturar tipo de usuario
    $tipo_usuario=$_SESSION['tipo_usuario'];
    #condicionales para traer el tipo  | nota: en mi caso llamo al tipo por su nombre completo
    if($tipo_usuario=="a"){
        $nombre_sesion="Administrador";
    } else if ($tipo_usuario=="c"){
        $nombre_sesion="Cajero";
    }

?>

#direccionar al cerrar sesion | boton cerrar sesion
    <a href="cerrar_sesion.php">Salir</a>
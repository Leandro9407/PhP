<?php
    session_start();
    session_destroy();

    $_SESSION['nombre_user']=NULL;
    $_SESSION['tipo_usuario']=NULL;
    $_SESSION['cod:user']=NULL;

    header("Location: login.php");
?>
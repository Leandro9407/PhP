<?php

    include_once('./estudiante/conexion_estudiante.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="consultar_a_estudiante.php">
        <label for="">Número de documento</label>
        <input type="number" name="documento">

        <input type="submit" value="Consultar">


    </form>
</body>
</html>
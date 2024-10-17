<?php

    include_once('conexion_bd_farmacia.php');

    $consultar=$conexion->query("SELECT * FROM inventario");
?>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre del medicamento</th>
        <th scope="col">Laboratorio</th>
        <th scope="col">Cantidad</th>
        </tr>
    </thead>
    <tbody>

    <?php
    while ($row=$consultar->fetch_array()){
    ?>    
        <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['nombre_l']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
        </tr>
    

    <?php
        }
    ?>

    </thead>
    <tbody>
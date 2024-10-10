<?php

    include_once('conexion_bd_grupo.php');

    $registro=$conexion->query("select * from grupos");
?>
     <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Director de grupo</th>
        <th scope="col">Grado</th>
        <th scope="col">Año</th>
        </tr>
    </thead>
    <tbody>

    <?php
    while ($row=$registro->fetch_array()){
    ?>

        <tr>   
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['director']; ?></td>
            <td><?php echo $row['grado']; ?></td>
            <td><?php echo $row['año']; ?></td>
        </tr>

    <?php
    }
    ?>
    </tbody>
    </table>    
       
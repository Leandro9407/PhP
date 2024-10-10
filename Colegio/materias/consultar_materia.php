<?php

    include_once('conexion_bd_materia.php');

    $registro=$conexion->query("select * from materias");
?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Asignatura</th>
            <th scope="col">Profesor</th>
            <th scope="col">Grado</th>
            </tr>
    </thead>
    <tbody>

    <?php    
    while ($row=$registro->fetch_array()){
    ?>

        <tr>   
            <td><?php echo $row['asignatura']; ?></td>
            <td><?php echo $row['profesor']; ?></td>
            <td><?php echo $row['grado']; ?></td>
        </tr>
    <?php
    }
    ?>
    
    </tbody>
    </table>

        
           

 
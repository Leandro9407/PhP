<?php

    include_once('conexion_bd_profesor.php');

    $registro=$conexion->query("select * from profesores");
?>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Documento</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Email</th>
        <th scope="col">Asignatura</th>
        </tr>
    </thead>
    <tbody>
      
    <?php
    while ($row=$registro->fetch_array()){
    ?>    
        <tr>   
            <td><?php echo $row['documento']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['asignatura']; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    </table>


    

    

        





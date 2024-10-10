<?php   

    include_once('conexion_estudiante.php');

    $registro=$conexion->query("select * from estudiante");

?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Documento</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Edad</th>
            <th scope="col">Promedio</th>
            <th scope="col">Estado</th>
            <th scope="col">Grupo</th>
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
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['promedio']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['grupo']; ?></td>
        </tr>
    <?php
    }
    ?>    
    </tbody>
    </table>



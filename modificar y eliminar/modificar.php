<!-- Usar get y traer consulta con el dato a modificar(para saber que se modifica) este tambien sirve para que me aparezca abajo los datos en una linea de forma muy sutil. Se incluye en el td y tr de la lista-->

<center>

    <a class="btn btn-primary" href="modificar.php?     <!-- pagina a direccionar -->
        nombre=<?php echo $nombre ?> &
        email=<?php echo $row['email'] ?> &
        nota=<?php echo $row['nota'] ?>" title="editar"
        <i class="icon-edit">Editar</i>

    </a>
    
</center>


    
<!-- modificar.php -->
 <?php
    $nombre=$_GET['nombre'];
    $email=$_GET['email'];
    $nota=$_GET['nota'];

 ?> 
    <form action="editar.php" method="POST">
        <tr>
            <td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            <td><input type="number" name="nota" value="<?php echo $nota; ?>"></td>

            <input type="submit" value="Editar">
        </tr>
    </form>
 

<!-- editar.php -->
 
<?php

    include_once("conexion.php");

    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $nota=$_POST['nota'];

    $conexion->query("UPDATE alumnos SET nombre='$nombre', email='$email', nota='$nota' WHERE email='$email'");

    header("Location: consultar_alumno.php");

?>    
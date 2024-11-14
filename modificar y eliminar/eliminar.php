<!-- debajo del modificar td y tr-->
 <a class="btn btn-danger" href="eliminar.php?
 email=<?php echo $row['email'] ?>" title="Eliminar">
    <i class="icon-edit">Eliminar</i>
</a>


<!-- eliminar.php -->
<?php
    include_once('conexion.php');

    $email=$_GET['email'];

    $conexion->query("DELETE FROM alumnos WHERE email='$email'");

    header("Location: consultar_alumno.php")
?>
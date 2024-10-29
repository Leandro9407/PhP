<table>
    <tr>
        <td>
            <h1>Listado alumnos</h1>
                <form method="POST" action="">
                    <div>
                        <input type="text" name="buscar" placeholder="Buscar alumno por nombre">
                    </div><br>
                    <button type="submit" class="btn btn-primary" name="buton"><strong>Buscar</strong></button>
                </form>
        </td>
    </tr>
</table>

<table class="table table-bordered">
        <tr class="well">
            <td><strong>Nombre</strong></td>
            <td><strong>Email</strong></td>
            <td>Nota</td>
            <td>Fecha</td>
            <td></td>
            <td></td>            
        </tr>

        <?php
            if(isset($_POST['buscar'])){    /* Isset para saber si hay algo, en este caso diria, si buscar esta vacio hacer... */
                $buscar=($_POST['buscar']);

                $consulta=$conexion->query("SELECT * FROM alumnos WHERE nombre LIKE '%$buscar%' ORDER BY nombre ASC"); #Like y %% es para buscar de forma imprecisa(solo agregando iniciales | orden by ASC para traer la consulta por orden alfabetico)

            }else{
                $consulta=$conexion->query("SELECT * FROM alumnos");
            }

            while ($row=$consulta->fetch_array()){
                $nombre=$row['nombre'];
                $nombre=$row['email'];
                $nombre=$row['nota'];
                $nombre=$row['fecha'];

        ?> 
        
            <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['nota']; ?></td>
                <td><?php echo $row['fecha']; ?></td>
                <td><button class="btn btn-primary"></button></td>
                <td><button class="btn btn-primary"></button></td>
            </tr>
            
            <?php
            }
            ?>
</table>
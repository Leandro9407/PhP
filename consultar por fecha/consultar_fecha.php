<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabla ventas</title>
</head>
<body>

<?php
    if (isset($_POST['ini']) and isset($_POST['fin'])){
        $inicio=$_POST['ini'];
        $final=$_POST['fin'];
    } else{
        $inicio = date("y-m-d");
        $final = date("y-m-d");
    }
?>

<div class="centrar">
    <h1 class="mt-3">Tablas ventas</h1>
    <div class="mt-3">

        <form action="" method="$_POST">
            <label for="form-label">Nombre del producto:</label>
            <input type="text" name="buscar">
            <input type="submit" value="Enviar">
        </form>

        <form action="" method="POST">
            <label class="form-label">Fecha de inicio:</label>
            <input type="date" name="ini" value="<?php echo $inicio ?>">
            <label class="form-label">Fecha de fin:</label>
            <input type="date" name="fin" value="<?php echo $final ?>">
            <input type="submit" value="Buscar">
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Metodo de pago</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Quitar</th>
                </tr>
            </thead>
        </table>
        <tbody>
            <?php
            include_once('conexion_tienda.php');

            if (isset($_POST["buscar"])){
                $buscar=$_POST['buscar'];

                $consultar=$conexion->quey("SELECT * FROM ventas WHERE id LIKE '%$buscar%' ORDER BY id ASC");

            }else if (!empty($_POST['ini']) and !empty($_POST['fin'])){
                $ini=($_POST['ini']);
                $fin=($_POST['fin']);

                $consultar=$conexion->query("SELECT * FROM ventas WHERE fecha BETWEEN '$ini' AND '$fin' ORDER BY fecha ASC");

            } else {

                $consultar=$conexion->query("SELECT * FROM ventas");

            }

            while ($row=$consultar->fetch_array()){   
            ?> 
            
            <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['total']; ?></td>
                <td><?php echo $row['fecha']; ?></td>
                <td><?php echo $row['metodoPago']; ?></td>
                <td>
                    <a href="" class="btn btn-primary">Modificar</a>
                </td>
                <td>
                    <a href="eliminar_producto.php?
                        id=<?php echo $row['id']; ?>" title="Eliminar">
                        <i class="icon-edit"></i>
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>

        </tbody>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
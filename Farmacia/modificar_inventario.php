<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
</head>
<body>

<section class="container-md text-center shadow pb-4 mt-5">
        <div class="row">
            <h1 class="titulo_m my-4"><strong>Farmacia L.A</strong></h1>
            <div class="boton_volver mb-3">
                <a class="btn btn-primary" href="http://localhost/PhP/Farmacia/index.php" role="button">Volver</a>
            </div> 
        </div>    
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-4 bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Modificar inventario <i class='bx bxs-user-detail fs-2 ms-2 text-info'></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <?php

                                $nombre=$_GET['nombre'];
                                $nombre_l=$_GET['nombre_l'];
                                $cantidad=$_GET['cantidad'];

                            ?>

                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Nombre del medicamento</th>
                                <th scope="col">Laboratorio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <form action="editar_inventario.php" method="POST">
                                    <tr>
                                        <td><input class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
                                        <td><select name="nombre_l" class="form-select">
                                            <option selected><?php echo $nombre_l; ?></option>
                                             <?php
                                                include_once('conexion_bd_farmacia.php');

                                                $consultar=$conexion->query("SELECT * FROM laboratorio");
                                                    while ($row=$consultar->fetch_array()){
                                                        echo '<option value="',$row['nombre_l'],'">',$row['nombre_l'],'</option>';
                                                    }
                                             ?>
                                            </select>
                                        </td>
                                        <td><input class="form-control" type="text" name="cantidad" value="<?php echo $cantidad; ?>"></td>

                                        <td><button type="submit" class="btn btn-primary">Editar</button></td>
                                    </tr>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
</head>
<body>

<section class="container-md pb-4">
        <div class="row">
            <div class="formularios d-flex justify-content-center">

                <div class="col-4 border rounded-3 shadow mb-3 bg-secondary p-3 ms-2 text-center">
                    <form action="" method="POST">
                        <label class="fs-5 text-light shadow rounded-3 p-1">Buscar por medicamento</label>
                            <input type="text" class="form-control my-3" placeholder="Ingrese el nombre del medicamento" name="nombre">
                        <div class="footer d-flex">
                            <input type="submit" class="btn btn-primary mb-2 ms-1" value="Buscar">
                            <a class="btn btn-primary mb-2 ms-2" href="http://localhost/PhP/farmacia/index.php">Volver a consulta</a>
                        </div>    
                    </form>
                </div>
                <div class="col-4 border rounded-3 shadow mb-3 bg-secondary p-3 ms-2 text-center">
                    <form action="" method="POST">
                        <label class="fs-5 text-light shadow rounded-3 p-1">Buscar por laboratorio</label>
                            <input type="text" class="form-control my-3" placeholder="Ingrese el nombre del laboratorio" name="nombre_l">
                        <div class="footer d-flex">
                            <input type="submit" class="btn btn-primary mb-2 ms-1" value="Buscar">
                            <a class="btn btn-primary mb-2 ms-2" href="http://localhost/PhP/farmacia/index.php">Volver a consulta</a>
                        </div>    
                    </form>
                </div>
    
            </div>    
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-4 bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class='bx bxs-user-detail fs-2 ms-2 text-info'></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
    
                    <?php

                        include_once('conexion_bd_farmacia.php');

                        if (isset($_POST['nombre'])){
                            $nombre=$_POST['nombre'];

                            $consultar=$conexion->query("SELECT * FROM inventario WHERE nombre LIKE '%$nombre%' ORDER BY nombre ASC");

                        } else if (isset($_POST['nombre_l'])){
                            $nombre_l=$_POST['nombre_l'];
                            
                            $consultar=$conexion->query("SELECT * FROM inventario WHERE nombre_l LIKE '%$nombre_l%' ORDER BY nombre ASC");

                        } else {

                            $consultar=$conexion->query("SELECT * FROM inventario ORDER BY nombre ASC");

                        }
                    ?>

                        <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Nombre del medicamento</th>
                                <th scope="col">Laboratorio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
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
                                <td>
                                    <a class="btn btn-primary" href="modificar_inventario.php?
                                    nombre=<?php echo $row['nombre'] ?>  &
                                    nombre_l=<?php echo $row['nombre_l'] ?>  &
                                    cantidad=<?php echo $row['cantidad'] ?>" title="Editar">
                                        <i class='bx bxs-pencil'></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="eliminar_inventario.php?
                                    nombre=<?php echo $row['nombre'] ?>  &
                                    nombre_l=<?php echo $row['nombre_l'] ?>" title="Eliminar">
                                    <i class='bx bxs-user-x'></i>
                                    </a>
                                </td>

                            </tr>
                        

                        <?php
                            }
                        ?>

                        </thead>
                        <tbody>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    </body>
    </html>    
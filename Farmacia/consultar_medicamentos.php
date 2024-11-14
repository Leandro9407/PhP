<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de medicamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
</head>
<body>
    
    <section class="container-md text-center shadow pb-4 mt-5">
        <div class="row">
            <h1 class="titulo_m my-4"><strong>Farmacia L.A</strong></h1>
            <div class="boton_volver mb-3">
                <a class="btn btn-primary" href="http://localhost/PhP/farmacia/index.php" role="button">Volver</a>
            </div> 
            <div class="formularios d-flex justify-content-center">
                <div class="col-4 border rounded-3 shadow mb-3 bg-secondary p-3 me-2">
                    <form action="" method="POST">
                        <label class="fs-5 text-light shadow rounded-3 p-1">Buscar por código</label>
                            <input type="text" class="form-control my-3" placeholder="Digite el código del medicamento" name="buscar">
                        <div class="footer d-flex">  
                            <input type="submit" class="btn btn-primary mb-2 ms-1" value="Buscar">
                            <a class="btn btn-primary mb-2 ms-2" href="http://localhost/PhP/farmacia/consultar_medicamentos.php" role="button">Volver a consulta</a>
                        </div>      
                    </form>
                </div>
                <div class="col-4 border rounded-3 shadow mb-3 bg-secondary p-3 ms-2">
                    <form action="" method="POST">
                        <label class="fs-5 text-light shadow rounded-3 p-1">Buscar por nombre</label>
                            <input type="text" class="form-control my-3" placeholder="Ingrese el nombre del medicamento" name="buscar_nombre">
                        <div class="footer d-flex">
                            <input type="submit" class="btn btn-primary mb-2 ms-1" value="Buscar">
                            <a class="btn btn-primary mb-2 ms-2" href="http://localhost/PhP/farmacia/consultar_medicamentos.php">Volver a consulta</a>
                        </div>    
                    </form>
                </div>
    
            </div>    
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-4 bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Consulta de medicamentos <i class='bx bxs-user-detail fs-2 ms-2 text-info'></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php

                            include_once('conexion_bd_farmacia.php');

                            if (isset($_POST["buscar"])){
                                $buscar=$_POST['buscar'];

                                $consultar=$conexion->query("SELECT * FROM medicamento WHERE codigo LIKE '%$buscar%' ORDER BY nombre ASC");

                            } else if (isset($_POST["buscar_nombre"])) {
                                $buscar_nombre=$_POST['buscar_nombre'];

                                $consultar=$conexion->query("SELECT * FROM medicamento WHERE nombre LIKE '%$buscar_nombre%' ORDER BY nombre ASC");

                            } else {

                                $consultar=$conexion->query("SELECT * FROM medicamento ORDER BY nombre ASC");
                            
                            }

                            ?>
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nombre del medicamento</th>
                                <th scope="col">Fecha de expedición</th>
                                <th scope="col">Fecha de vencimiento</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            while ($row=$consultar->fetch_array()){
                            ?>

                            <tr>
                                <td><?php echo $row['codigo']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['expedicion']; ?></td>
                                <td><?php echo $row['vencimiento']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="modificar_medicamento.php?
                                        codigo=<?php echo $row['codigo'] ?>  &
                                        nombre=<?php echo $row['nombre'] ?>  &
                                        expedicion=<?php echo $row['expedicion'] ?>  &
                                        vencimiento=<?php echo $row['vencimiento'] ?>" title="Editar">
                                        <i class='bx bxs-pencil'></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="eliminar_medicamento.php?
                                        nombre=<?php echo $row['nombre'] ?>" title="Eliminar">
                                        <i class='bx bxs-user-x'></i>
                                    </a>
                                </td>
                            </tr>
                            

                            <?php
                            }
                            ?>
                            </thead>
                            </tbody>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
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
                        <label class="fs-5 text-light shadow rounded-3 p-1">Buscar</label>
                            <input type="text" class="form-control my-3" placeholder="Ingrese el nombre del laboratorio" name="buscar">
                        <div class="footer d-flex">  
                            <input type="submit" class="btn btn-primary mb-2 ms-1" value="Buscar">
                            <a class="btn btn-primary mb-2 ms-2" href="http://localhost/PhP/farmacia/consultar_laboratorio.php" role="button">Volver a consulta</a>
                        </div>      
                    </form>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-4 bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Consulta de laboratorios <i class='bx bxs-user-detail fs-2 ms-2 text-info'></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php

                            include_once('conexion_bd_farmacia.php');

                            if (isset($_POST['buscar'])){
                                $buscar=$_POST['buscar'];

                                $consulta=$conexion->query("SELECT * FROM laboratorio WHERE nombre_l LIKE '%$buscar%' ORDER BY nombre_l ASC");

                            } else {

                            $consulta=$conexion->query("SELECT * FROM laboratorio");
                            
                            }

                            ?>

                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Nombre del laboratorio</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php

                            while ($row=$consulta->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $row['nombre_l']; ?></td>
                                <td><?php echo $row['direccion']; ?></td>
                                <td><?php echo $row['ciudad']; ?></td>
                                <td><?php echo $row['telefono']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="modificar_laboratorio.php?
                                        nombre_l=<?php echo $row['nombre_l'] ?>  &
                                        direccion=<?php echo $row['direccion'] ?>  &
                                        ciudad=<?php echo $row['ciudad'] ?>  &
                                        telefono=<?php echo $row['telefono'] ?>" title="Editar">
                                        <i class='bx bxs-pencil'></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="eliminar_laboratorio.php?
                                        nombre_l=<?php echo $row['nombre_l'] ?>" title="Eliminar">
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






































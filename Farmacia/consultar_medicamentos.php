<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de medicamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <section class="container-md text-center shadow pb-4 mt-5">
        <div class="row">
            <h2 class="titulo_m my-4">Farmacia L.A</h2>
            <div class="boton_volver mb-3">
                <a class="btn btn-primary" href="http://localhost/PhP/farmacia/index.php" role="button">Volver</a>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-4 bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Consulta de medicamentos
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php

                            include_once('conexion_bd_farmacia.php');

                            $consultar=$conexion->query("SELECT * FROM medicamento");
                            ?>
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nombre del medicamento</th>
                                <th scope="col">Fecha de expedición</th>
                                <th scope="col">Fecha de vencimiento</th>
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
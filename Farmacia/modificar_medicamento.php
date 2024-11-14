<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar medicamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
</head>
<body>

<section class="container-md text-center shadow pb-4 mt-5">
        <div class="row">
            <h1 class="titulo_m my-4"><strong>Farmacia L.A</strong></h1>
            <div class="boton_volver mb-3">
                <a class="btn btn-primary" href="http://localhost/PhP/Farmacia/consultar_medicamentos.php" role="button">Volver</a>
            </div> 
        </div>    
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-4 bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Modificar medicamento <i class='bx bxs-user-detail fs-2 ms-2 text-info'></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <?php

                                $codigo=$_GET['codigo'];
                                $nombre=$_GET['nombre'];
                                $expedicion=$_GET['expedicion'];
                                $vencimiento=$_GET['vencimiento'];

                            ?>

                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nombre del medicamento</th>
                                <th scope="col">Fecha de expedición</th>
                                <th scope="col">Fecha de vencimiento</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <form action="editar_medicamento.php" method="POST">
                                    <tr>
                                        <td><input class="form-control" type="text" name="codigo" value="<?php echo $codigo; ?>"></td>
                                        <td><input class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
                                        <td><input class="form-control" type="text" name="expedicion" value="<?php echo $expedicion; ?>"></td>
                                        <td><input class="form-control" type="text" name="vencimiento" value="<?php echo $vencimiento; ?>"></td>

                                        <td><button type="submit" class="btn btn-primary">Editar</button></td>
                                    </tr>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>    
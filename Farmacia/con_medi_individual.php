<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta rápida medicamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <section class="container-md text-center position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="boton_volver mb-3">
                <a class="btn btn-primary" href="http://localhost/PhP/farmacia/index.php" role="button">Volver</a>
            </div>
                <div class="col-12 border border-4 border-info p-5 fs-2 rounded-4">
                    <?php
                        include_once('conexion_bd_farmacia.php');

                        $nombre=$_GET['nombre'];

                        $consulta=$conexion->query("SELECT * FROM medicamento Where nombre LIKE '%$nombre%' ORDER BY nombre ASC");

                            if ($row=$consulta->fetch_array()){
                                $nombre=$row['nombre'];
                                $codigo=$row['codigo'];
                                $expedicion=$row['expedicion'];
                                $vencimiento=$row['vencimiento'];

                                    echo "<p><strong>Medicamento encontrado: </strong></p>";
                                    echo "<strong>Nombre: </strong> ", $nombre. '<br>';
                                    echo "<strong>Código: </strong>", $codigo. '<br>';
                                    echo "<strong>Fecha de expedición: </strong>", $expedicion. '<br>';
                                    echo "<strong>Fecha de vencimiento: </strong>", $vencimiento;
                                    
                                } else {
                                    echo "<p><strong>El medicamento no se encuentra</strong></p>";
                                }
                            
                    ?>
                </div>
        </div>
    </section>
    

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


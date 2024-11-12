<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    
</head>
<body>
        <div class="container-md shadow pb-4">
            <h1 class="titulo text-center mt-5"><strong>Farmacia L.A</strong></h1>
            <div class="botones pt-4 pb-4 text-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registro_medicamento">
            Medicamento
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registro_laboratorio">
            Laboratorio
            </button>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#registro_inventario">
            Inventario
            </button>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#consulta_individual">
            Consulta rápida
            </button>

        </div>
        
            <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow">
                    <h2 class="accordion-header">
                    <button class="accordion-button fs-4 text-light bg-secondary shadow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        INVENTARIO <i class='bx bxs-user-detail fs-2 ms-2 text-info'></i>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php
                            include_once('consultar_inventario.php');
                        ?>
                    </div>
                    </div>
                </div>
            </div>  

                   
        <!-- modales -->

        <!-- registro medicamento -->
        <div class="modal fade" id="registro_medicamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Formulario medicamento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="ingresar_medicamento.php" method="POST">
                            <label for="">Código</label>
                                <input type="text" class="form-control mb-3" name="codigo">
                            <label for="">Nombre del medicamento</label>
                                <input type="text" class="form-control mb-3" name="nombre">
                            <label for="">Fecha de expedicion</label>
                                <input type="date" class="form-control mb-3" name="expedicion">
                            <label for="">Fecha de vencimiento</label>    
                                <input type="date" class="form-control mb-3" name="vencimiento">           
                                    
                                <div class="modal-footer">
                                    <a class="btn btn-info position-absolute top-60 start-0 ms-4" href="http://localhost/PhP/farmacia/consultar_medicamentos.php" role="button">Consultar</a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                        </form>       
                    </div>   
                </div>
            </div>
        </div>

       

        <!-- registro laboratorio -->
        <div class="modal fade" id="registro_laboratorio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Formulario laboratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="ingresar_laboratorio.php" method="POST">
                            <label for="">Nombre del laboratorio</label>
                                <input type="text" class="form-control mb-3" name="nombre_l">
                            <label for="">Dirección</label>
                                <input type="text" class="form-control mb-3" name="direccion">
                            <label for="">Ciudad</label>
                                <input type="text" class="form-control mb-3" name="ciudad">
                            <label for="">Teléfono</label>
                                <input type="number" class="form-control mb-3" name="telefono">

                            <div class="modal-footer">
                                <a class="btn btn-info position-absolute top-60 start-0 ms-4" href="http://localhost/PhP/farmacia/consultar_laboratorio.php" role="button">Consultar</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>


        <!-- registro inventario -->
        <div class="modal fade" id="registro_inventario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Formulario Inventario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="ingresar_inventario.php" method="POST">

                            <label for="">Nombre del medicamento</label>
                            <select name="nombre" class="form-select mb-3">   
                                <option selected>Seleccione medicamento...</option>
                                    <?php   
                                        include_once('conexion_bd_farmacia.php');

                                        $consultar=$conexion->query("SELECT * FROM medicamento");

                                        while ($row=$consultar->fetch_array()){
                                            echo '<option value="',$row['nombre'],'">',$row['nombre'],'</option>';
                                        }     
                                    ?>
                            </select>

                            <label for="">Laboratorio</label>
                            <select name="nombre_l" class="form-select mb-3">
                                <option selected>Selecione laboratorio...</option>
                                <?php
                                    include_once('conexion_bd_farmacia.php');

                                    $consultar=$conexion->query("SELECT * FROM laboratorio");

                                    while ($row=$consultar->fetch_array()){
                                        echo '<option value="',$row['nombre_l'],'">',$row['nombre_l'],'</option>';
                                    }
                                ?>

                            </select>

                            <label for="">Cantidad</label>
                                <input type="number" class="form-control mb-3" name="cantidad">

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>    
                    </div>      
                </div>
            </div>
        </div>

        
        <!-- Consulta individual -->
        <div class="modal fade" id="consulta_individual" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Consultar por:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <?php
                            include_once('conexion_bd_farmacia.php');
                        ?>
                        
                        <form action="con_medi_individual.php">
                            <label for="">Nombre del medicamento</label>
                                <input type="text" class="form-control mb-3" name="nombre">

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Consultar</button>
                            </div>
                        </form>

                        <hr><br>
                        
                        <?php
                            include_once('conexion_bd_farmacia.php');
                        ?>

                        <form action="con_labor_individual.php">
                            <label for="">Nombre del laboratorio</label>
                                <input type="text" class="form-control mb-3" name="nombre_l">

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Consultar</button>
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
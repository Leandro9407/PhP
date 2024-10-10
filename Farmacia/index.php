<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        <div class="container-md shadow pb-4">
            <h1 class="titulo text-center mt-5">Farmacia</h1>
            <div class="botones pt-4 pb-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registro_medicamento">
            Medicamento
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registro_laboratorio">
            Laboratorio
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registro_inventario">
            Inventario
            </button>
        
        
            
    
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
                            <label for="">Laboratorio</label>
                            <select name="laboratorio" class="form-select mb-3">
                                <option selected>Selecione laboratorio...</option>
                                <?php
                                    include_once('conexion_bd_farmacia.php');

                                    $consultar=$conexion->query("SELECT * FROM laboratorio");

                                    while ($row=$consultar->fetch_array()){
                                        echo '<option value="',$row['nombre_l'],'">',$row['nombre_l'],'</option>';
                                    }

                                ?>
                             
                            </select> 
                                    
                                <div class="modal-footer">
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
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
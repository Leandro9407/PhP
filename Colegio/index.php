<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalentoADSO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="body bg-secondary">
    
        <div class="container">
            <h1 class="titulo text-center m-5 border p-3 text-light">
                <img src="./img/escudo.jpg" width="150" alt="escudo">    
                Institución Educativa TalentoADSO 
            </h1>
        
            <div class="row">
                <!--profesores-->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/profesores.jpg" class="card-img-top" alt="Profesores">
                        <div class="card-body">
                            <h5 class="card-title">Profesores</h5>
                            <button type="button" class="btn btn-primary mx-4 mt-2" data-bs-toggle="modal" data-bs-target="#registro_profesores">
                            Registrar
                            </button>
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#consultar_profesores">
                            Consultar
                            </button>
                        </div>
                    </div>
                </div>

                <!--estudiantes-->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/estudiantes.jpg" class="card-img-top" alt="Estudiantes">
                        <div class="card-body">
                            <h5 class="card-title">Estudiantes</h5>
                            <button type="button" class="btn btn-primary mx-4 mt-2" data-bs-toggle="modal" data-bs-target="#registro_estudiante">
                            Registrar
                            </button>
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#consultar_estudiante">
                            Consultar
                            </button>
                        </div>
                    </div>
                </div>
                
                <!--grupos-->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/grupos.jpg" class="card-img-top" alt="Grupo">
                        <div class="card-body">
                            <h5 class="card-title">Grupos</h5>
                            <button type="button" class="btn btn-primary mx-4 mt-2" data-bs-toggle="modal" data-bs-target="#registro_grupo">
                            Registrar
                            </button>
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#consultar_grupo">
                            Consultar
                            </button>
                        </div>
                    </div>
                </div>

                <!--materias-->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/materias.jpg" class="card-img-top" alt="Materia">
                        <div class="card-body">
                            <h5 class="card-title">Materias</h5>
                            <button type="button" class="btn btn-primary mx-4 mt-2" data-bs-toggle="modal" data-bs-target="#registro_materia">
                            Registrar
                            </button>
                            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#consultar_materia">
                            Consultar
                            </button>
                        </div>
                    </div>
                </div>          
            </div>
        


            <!--modales-->

            <!--modal profesores registro-->
            <div class="modal fade" id="registro_profesores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4">Formulario profesores</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  

                            <form action="./profesor/ingresar_profesor.php" method="POST">
                                
                                    <div class="col-6 mb-3">
                                        <label for="" class="form-label">Documento</label>
                                        <input type="number" class="form-control" name="documento">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="apellido">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="" class="form-label">Teléfono</label>
                                        <input type="number" class="form-control" name="telefono">
                                    </div>
                                    <div class="col-10 mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="" class="form-label">Asignatura</label>
                                        <select class="form-select" name="asignatura">
                                            <?php

                                            include_once('./materias/conexion_bd_materia.php');

                                                $consulta=$conexion->query( "SELECT * FROM materias");
                                                while ($row=$consulta->fetch_array()){

                                                    echo '<option value="'.$row['asignatura'].'" selected>'.$row['asignatura'].'</option>';

                                                };

                                            ?>
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                    </div>
                                
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        
            <!--modal profesores consultar-->
            <div class="modal fade" id="consultar_profesores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4">Consulta profesores</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  
                        
                                    <?php
                             
                                    include_once('./profesor/consultar_profesor.php');
                                    
                                    ?>
                                    
                
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>    
                </div>
            </div>


            <!--modal estudiante registro-->
            <div class="modal fade" id="registro_estudiante" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4">Formulario estudiantes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  

                            <form action="./estudiante/ingresar_estudiante.php" method="POST">
                                
                                    <div class="col-6 mb-3">
                                        <label for="" class="form-label">Documento</label>
                                        <input type="number" class="form-control" name="documento">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="apellido">
                                    </div>
                                    <div class="col-8 mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="col-2 mb-3">
                                        <label for="" class="form-label">Edad</label>
                                        <input type="number" class="form-control" name="edad">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="" class="form-label">Nota 1</label>
                                        <input type="number" class="form-control" step="0.001" name="nota1">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="" class="form-label">Nota 2</label>
                                        <input type="number" class="form-control" step="0.001" name="nota2">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="" class="form-label">Nota 3</label>
                                        <input type="number" class="form-control" step="0.001" name="nota3">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="" class="form-label">Grupo</label>
                                        <select class="form-select" name="grupo">
                                            <?php

                                            include_once('./estudiante/conexion_estudiante.php');

                                                $consulta=$conexion->query( "SELECT * FROM grupos");
                                                while ($row=$consulta->fetch_array()){

                                                    echo '<option value="'.$row['nombre'].'" selected>'.$row['nombre'].'</option>';

                                                };

                                            ?>
                                        </select>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                    </div>
                                 
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        
            <!--modal estudiante consultar-->
            <div class="modal fade" id="consultar_estudiante" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4">Consulta estudiante</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  
                        
                                <?php

                                include_once('./estudiante/consulta_estudiante.php');

                                ?>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>    
                </div>
            </div>


            <!--modal grupos registro-->
            <div class="modal fade" id="registro_grupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4">Formulario grupo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  

                            <form action="./grupos/ingresar_grupo.php" method="POST">
                                
                                    <div class="col-md-8 mb-3">
                                        <label for="" class="form-label">Nombre del grupo</label>
                                        <input type="text" class="form-control" name="nombre">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="" class="form-label">Director de grupo</label>
                                        <input type="text" class="form-control" name="director">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="" class="form-label">Grado</label>
                                        <input type="number" class="form-control" name="grado">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="" class="form-label">Año escolar</label>
                                        <input type="number" class="form-control" name="año">
                                    </div>
                                    

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                    </div>
                                
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        
            <!--modal grupo consultar-->
            <div class="modal fade" id="consultar_grupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4">Consulta grupo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  
                            
                                <?php

                                    include_once('./grupos/consultar_grupo.php');

                                ?>
                
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>    
                </div>
            </div>


            <!--modal materia registro-->
            <div class="modal fade" id="registro_materia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4">Formulario materia</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  

                            <form action="./materias/ingresar_materia.php" method="POST">
                                
                                    <div class="col-md-4 mb-3">
                                        <label for="" class="form-label">Asignatura</label>
                                        <select class="form-select" name="asignatura">
                                            <option selected>Elegir</option>
                                            <option value="Matemáticas">Matemáticas</option>
                                            <option value="Lenguaje">Lenguaje</option>
                                            <option value="Idiomas">Idiomas</option>
                                            <option value="Sociales">Sociales</option>
                                            <option value="Filosofía">Filosofía</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="" class="form-label">Profesor</label>
                                        <input type="text" class="form-control" name="profesor">
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="" class="form-label">Grado</label>
                                        <input type="number" class="form-control" name="grado">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                    </div>
                                 
                            </form>  
                        </div>
                    </div>     
                </div>
            </div>
        
            <!--modal materia consultar-->
            <div class="modal fade" id="consultar_materia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-secondary text-light">
                        <div class="modal-header">
                            <h5 class="modal-title fs-4">Consulta materia</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">  
                        
                            <?php

                                include_once('./materias/consultar_materia.php');

                            ?>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
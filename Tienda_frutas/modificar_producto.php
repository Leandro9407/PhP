<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Fruteria</title>
</head>
<body>
    <section class="container-fluid">
        <div class="datos">
            <ul class="nav justify-content-around d-flex align-items-center bg-success text-warning">
                <li class="nav-telefono d-flex align-items-center">
                    <i class='bx bxs-phone-call'>345 45 34</i>
                    <i class='bx bx-envelope ms-3'></i>fruteria_natural@web.com</i>
                </li>
                <li class="carrito">
                    <i class='bx bxs-store-alt'>Calle 21 # 5-86 Centro</i>
                </li>
            </ul>
        </div>

        <div class="nabvar_1">
            <ul class="nav justify-content-center shadow fs-4 bg-warning d-flex align-items-center p-3" style="background: linear-gradient(250deg, #c6f6bb, orange)">
                <li class="nav-item text-primary me-5">
                    <?php
                        include_once('sesion_usuarios.php');
                    ?>
                </li>
                <li class="logo me-4">
                    <img src="logo.png" class="rounded-circle w-100 " alt="Logo">
                </li>
                <li class="nav-item">

                    <form action="" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control border border-success pe-5 " placeholder="Buscar producto" name="buscar">
                            <button type="submit" class="btn btn-outline-light bg-success border border-success"><i class='bx bx-search-alt-2'></i></button>
                        </div>
                    </form>  

                </li>
                <liv class="nav-item ms-5">
                    <a class="text-light bg-success p-1 ms-2 fs-6 rounded-3 ms-5" style="text-decoration: none;" href="cerrar_sesion.php">Cerrar sesión</a>
                </liv>
            </ul>
        </div>
        <div class="nabvar">
            <ul class="nav justify-content-center shadow fs-4 bg-success d-flex align-items-center p-3">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="formulario_productos.php">AGREGAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="consultar_productos.php">CONSULTAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="ver_productos.php">VER PRODUCTOS</a>
                </li>
            </ul>
        </div>
            
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="frutas1.jpg" class="d-block w-100" alt="Frutas">
                </div>
                <div class="carousel-item">
                    <img src="frutas2.jpg" class="d-block w-100" alt="Frutas">
                </div>
                <div class="carousel-item">
                    <img src="frutas3.jpg" class="d-block w-100" alt="Frutas">
                </div>
            </div>
            <div class="carousel-caption top-0 d-flex justify-content-center">
                <div class="card border-success border-3" style="width: 80rem;">
                    
                    <div class="accordion p-4" id="accordionExample">
                        <div class="accordion-item shadow border border-success">
                            <h2 class="accordion-header">
                            <button class="accordion-button bg-success text-light fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Productos</strong><i class='bx bx-basket ms-2'></i>
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <?php
                                        $id=$_GET['id'];
                                        $nombre=$_GET['nombre'];
                                        $precio=$_GET['precio'];
                                        $costo=$_GET['costo'];
                                        $imagen=$_GET['imagen'];
                                        
                                    ?>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Costo</th>
                                                <th scope="col">Imagen</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                    </tbody>

                                        <form action="editar_productos.php" method="POST">
                                            <tr>
                                                <td><input type="text" class="form-control border-success" name="id" value="<?php echo $id ?>"></td>
                                                <td><input type="text" class="form-control border-success" name="nombre" value="<?php echo $nombre ?>"></td>
                                                <td><input type="text" class="form-control border-success" name="precio" value="<?php echo $precio ?>"></td>
                                                <td><input type="text" class="form-control border-success" name="costo" value="<?php echo $costo ?>"></td>
                                                <td><input type="text" class="form-control border-success" name="imagen" value="<?php echo $imagen ?>"></td>
                                                <td><button type="submit" class="btn btn-success">Editar</button></td>     
                                            </tr>
                                        </form>

                                    </thead>
                                    </tbody>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
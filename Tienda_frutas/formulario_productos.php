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
                    <div class="input-group">
                        <input type="text" class="buscador form-control border border-success pe-5 " placeholder="Buscar producto">
                        <button class="btn btn-outline-light bg-success border border-success" type="button"><i class='bx bx-search-alt-2'></i></button>
                    </div>
                </li>
                <liv class="nav-item ms-5">
                    <a class="text-light bg-success p-1 ms-2 fs-6 rounded-3 ms-5" style="text-decoration: none;" href="cerrar_sesion.php">Cerrar sesión</a>
                </liv>
            </ul>
        </div>
        <div class="nabvar">
            <ul class="nav justify-content-center shadow fs-4 bg-success d-flex align-items-center p-3">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">AGREGAR</a>
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
            <div class="carousel-caption top-0 d-flex justify-content-center align-items-center" style="height: 40em;">
                <div class="card border-success border-3" style="width: 40rem; height: 33rem;">
                    <div class="card-body">
                            
                        <form action="ingresar_productos.php" method="POST">
                            <div class="row text-start">
                                <h1 class="nuevo_producto text-center mt-2">Nuevo producto</h1>
                                <div class="col-12 my-3">
                                    <label for="">Nombre del producto</label>
                                    <input type="text" class="form-control border border-success mt-2" placeholder="Ingrese producto" name="nombre">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="">Precio</label>
                                    <input type="number" class="form-control border border-success mt-2" placeholder="Ingrese precio" name="precio">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="">Costo</label>
                                    <input type="number" class="form-control border border-success mt-2" placeholder="Ingrese costo" name="costo">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="">Imagen</label>
                                    <input type="text" class="form-control border border-success mt-2" placeholder="Ingrese url" name="imagen">
                                </div>
                                <div class="col-2 mt-2">
                                    <button type="submit" class="btn btn-success">Agregar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
         
    </section>     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


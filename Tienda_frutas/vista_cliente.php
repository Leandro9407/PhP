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
                <li class="casita">
                    <i class='bx bxs-store-alt'>Calle 21 # 5-86 Centro</i>
                </li>
            </ul>
        </div>

        <div class="nabvar_1">
            <ul class="nav justify-content-center shadow fs-4 bg-warning d-flex align-items-center p-3" style="background: linear-gradient(250deg, #c6f6bb, orange)">
                <li class="logo me-4">
                    <img src="logo.png" class="rounded-circle w-100 " alt="Logo">
                </li>
                <li class="nav-item">

                    <form action="" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control border border-success pe-5 " placeholder="Buscar producto" name="buscar">
                            <button type="submit" class="btn btn-outline-light bg-success border border-success" ><i class='bx bx-search-alt-2'></i></button>
                        </div>
                    </form>  

                </li>
                <liv class="nav-item ms-5">
                <a class="text-light bg-success p-1 ms-2 fs-6 rounded-3 ms-5" style="text-decoration: none;" href="cerrar_sesion.php">Cerrar sesión</a>
                </liv>
            </ul>
        </div>
        <div class="nabvar">
            <ul class="nav justify-content-around shadow fs-4 bg-success d-flex align-items-center p-3">
                <li class="nav-item text-info">
                    <?php
                        include_once('sesion_usuarios.php');
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="vista_cliente.php">COMPRAR PRODUCTOS</a>
                </li>
                <li class="carrito d-flex justify-items-end">
                    <a href="#">
                        <i class='bx bxs-cart-alt bx-tada text-warning fs-1'></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                            0
                            <span class="visually-hidden">unread messages</span>
                        </span> 
                    </a>   
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
                <div class="card border-success border-3 p-5" style="width: 70rem;">
                    
                    <?php
                        include_once('conexion_tienda.php');

                        if (isset($_POST['buscar'])){
                            $buscar=$_POST['buscar'];

                            $consulta=$conexion->query("SELECT * FROM productos WHERE nombre LIKE '%$buscar%' ORDER BY nombre ASC");

                        } else {

                            $consulta=$conexion->query("SELECT * FROM productos ORDER BY nombre ASC");   

                        }
                    ?>
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <?php
                        while ($row=$consulta->fetch_array()){
                        ?>
                        
                            <div class="col">
                                <form action="carrito.php" method="POST">
                                    <div class="card border border-success shadow" style="width: 15rem;">
                                            <img src="<?php echo $row['imagen']; ?>" class="card-img-top border border-warning shadow" alt="fruta">
                                        <div class="card-body border border-warning shadow bg-success text-warning">
                                            <h5 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h5>
                                            <p class="card-text">$<?php echo $row['precio']; ?></p>
                                            <button class="btn btn-warning text-success"><strong>Agregar</strong></button>
                                        </div>
                                    </div> 
                                </form>      
                            </div>                                                        
                                            
                        <?php
                        }
                        ?>
                    </div>     
                </div>
                
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
    session_start();
    include_once('conexion_tienda.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh; background-image: url('https://images.wallpaperscraft.com/image/single/raspberry_lemon_berries_1109008_2560x1600.jpg');">
        <div class="sesion">
            <form action="" method="POST">
                <?php
                    if (!empty($_POST['usuario']) and !empty($_POST['contraseña'])){
                        $usuario=$_POST['usuario'];
                        $contraseña=$_POST['contraseña'];
                        
                        $login=$conexion->query("SELECT * FROM username WHERE usuario='$usuario' and contraseña='$contraseña'");
                        
                        if ($row=$login->fetch_array()){
                            
                            if ($row['estado']=='activo'){
                                $_SESSION['nombre_user']=$row['nombre'];
                                $_SESSION['tipo_usuario']=$row['tipo'];
                                $_SESSION['cod_user']=$usuario;
                                
                                if ($row['tipo']=='administrador'){
                                    echo ('<div class="text-center fs-3"><strong>¡Bienvenido!<br>'. $row['nombre'].' '.$row['apellido'].'').'<br></strong></div>';
                                    
                                    echo '<meta http-equiv="refresh" content="2;url=consultar_productos.php">';
                                    
                                } else if ($row['tipo']=='cliente'){
                                    echo ('<div class="text-center fs-3"><strong>¡Bienvenid@!<br>'. $row['nombre'].' '.$row['apellido'].'').'<br></strong></div>';
                                    
                                    echo '<meta http-equiv="refresh" content="2;url=vista_cliente.php">'; 
                                }
                                
                            } else {
                                echo ('No se encuentra activo en la base de datos <br> Consulte con su administrador');
                                echo '<center><a href="login.php" class="btn btn-success text-light mt-2><strong>Intentar de nuevo</strong></a></center>';
                            }
                            
                        } else {
                            echo ('Usuario y contraseña incorrectos<br>');
                            echo '<center><a href="login.php" class="btn btn-success text-light mt-2"><strong>Intentar de nuevo</strong></a></center>';
                        }
                        
                    } else {
                        echo '<div class="text-center p-5 shadow-lg rounded-1"><h3>Iniciar sesión</h3><input type="text" class="form-control my-2 shadow-lg" name="usuario" placeholder="Usuario" autocomplete="off" requered>
                        <input type="password" class="form-control mb-2 shadow-lg" name="contraseña" placeholder="Contraseña" autocomplete="off" requered>
                        <button class="btn btn-success shadow-lg" type="submit"><strong>Entrar</strong></button></div>';
                    }
                    ?>
            </form>
        </div>   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
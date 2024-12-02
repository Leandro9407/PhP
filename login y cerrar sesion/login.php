<?php
    session_start();
    include_once("conexion_bd_farmacia");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST">
            <?php
            if (!empty($_POST['usuario']) and !empty($_POST['contrasena'])){
                $usuario=($_POST['usuario']);
                $contrasena=($_POST['contrasena']);

                $login=$conexion->query("SELECT * FROM username WHERE usuario='$usuario' and contrasena='$contrasena'");

                    if ($row=$login->fetch_array()){

                        if ($row['estado']=='activo'){
                            $_SESSION['nombre_user']=$row['nombre'];    #deben estar en la base de datos
                            $_SESSION['tipo_usuario']=$row['tipo'];
                            $_SESSION['cod_user']=$usuario;

                            if ($row['tipo']=='administrador' or $row['tipo']=='cajero'){
                                echo ('Bienvenido<br>'. $row['nombre'].' '.$row['apellido'].'').'<br>';  #esto se traer de la consulta del que ingresa

                                echo '<meta http-equiv="refresh" content="2;url=Modulos/principal">';
                                
                            }else if ($row['tipo']=='cliente'){
                                  
                                echo '<meta http-equiv="refresh" content="2;url=Modulos/tienda">';
                                
                            }

                        }else {
                            echo ('Usted no se encuentra activo en la base de datos <br> Consulte con su administrador');
                            echo '<center><a href="index.php" class="btn"><strong>Intentar de nuevo</strong></a></center>';
                        }   
                    }else {
                        echo ('Usuario y contraseña incorrectos<br>');
                        echo '<center><a href=index.php" class="btn"><strong>Intentar de nuevo</strong></a></center>';
                    }
            }else {
                echo '<input type="text" value="" name="usuario" placeholder="Documento" autocomplete="off" requered>
                <input type="password" value="" name="contrasena" placeholder="Password" autocomplete="off" requered>
                div align="right"><button class="btn btn-large btn-primary" type="submit"><strong>Entrar</strong></button>';
                                
            }

            ?>
        </form>
    </div>

</body>
</html>
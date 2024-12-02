<?php
    session_start();
    
?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
    <tbody>
        <?php
            if ($nombre['nombre']=='Banano'){
                $nombre=$_POST['nombre'];
                
                if ($row=$nombre->fetch_array()){
                    $_SESSION['producto']=$row['nombre'];
                    $_SESSION['valor']=$row['precio'];
        ?>
        
        <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td></td>
        </tr>
        
        <?php
            }
                }
        ?>
    </tbody>   
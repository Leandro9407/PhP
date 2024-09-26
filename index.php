<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de naranjas</h1>
    <?php
        if (empty($_REQUEST)){
    ?>  

        <form action="" method="POST">
            <label>¿Cuántos clientes?</label>
            <input type="text" name="num">
            <input type="submit" value="Enviar">
        </form>
    
    <?php
        }elseif(isset($_REQUEST['num'])){
    ?>

        <form action="" method="POST">
    <?php
         $numero = $_REQUEST['num'];
         for($i=0; $i<$numero; $i++){
    ?>

            Ingrese la cantidad de kilos del cliente <?php echo $i; ?>;
            <input type="number" name="cantidad[]" value="">
            <br>
    <?php
         }  
    ?>

            <input type="submit" value="Enviar">
         </form>
    <?php
        }else{
            $acum = 0;
            $precio= 10000;
            $cantidades = $_REQUEST['cantidad'];
            foreach($cantidades as $cantidad){
                echo "<p>Cantidad: $cantidad</p>";
                if ($cantidad>10){
                    $total = $precio * $cantidad;
                    $acum = $acum + $total;
                    echo "Tiene descuento";
                }else{
                    echo "No tiene descuento";
                }
            } 
            
            echo '<br>';
            echo $acum;
    
        }
    ?>    

</body>
</html>
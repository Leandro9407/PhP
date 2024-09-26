<?php

    $cantidad=$_REQUEST['cant'];
    $salario_new=$_REQUEST['salario'];

    for($i=1; $i<=$cantidad; $i++){
        echo $i;
        
        ?>

        <form action="calculos2.php">
            Salario:
            <input type="text" name="salario">
            <input type="submit" value="calcular">

        </form>
        <?php



    }


?>
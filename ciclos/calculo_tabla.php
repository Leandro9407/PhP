<?php


    for ($i=1; $i<=9; $i++){
        echo '<br>';
        echo 'Tabla del ', $i;
        echo '<br>';
        for ($y=1; $y<=10; $y++){
            $r=$i*$y;

            echo $i, "x", $y;
            echo "= ", $r. '<br>';
        }
        
    }


?>
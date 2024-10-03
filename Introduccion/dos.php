<?php
        /* llamado */
    $edad=$_REQUEST['edad'];

    echo "La edad es: ", $edad. '<br>';

    if ($edad>=18){
        echo "Es mayor de edad";
    } else {
        echo "Es menor de edad";
    }

?>
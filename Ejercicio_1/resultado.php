<?php

$n_documento=$_REQUEST['n_documento'];
echo "Número de documento: ", $n_documento. '<br>';

$nombre=$_REQUEST['nombre'];
echo "Nombre: ", $nombre. '<br>';

$apellido=$_REQUEST['apellido'];
echo "Apellido: ", $apellido. '<br>';

$email=$_REQUEST['email'];
echo "Email: ", $email. '<br>';

$telefono=$_REQUEST['telefono'];
echo "Teléfono: ", $telefono. '<br>';

$direccion=$_REQUEST['direccion'];
echo "Dirección: ", $direccion. '<br>';

$f_nacimiento=$_REQUEST['f_nacimiento'];
echo "Fecha de nacimiento: ", $f_nacimiento. '<br>';

$genero=$_REQUEST['genero'];
echo "Género: ", $genero. '<br>';

$estado_civil=$_REQUEST['estado_civil'];
echo "Estado civil: ", $estado_civil. '<br>';

$aux_transporte=$_REQUEST['aux_transporte'];
echo "Auxilio de transporte: ", $aux_transporte. '<br>';

$hor_extras=$_REQUEST['horas'];
echo "Horas extras: ", $hor_extras. '<br>';

$ciudad=$_REQUEST['ciudad'];
echo "Ciudad: ", $ciudad. '<br>';

if ($ciudad=='Bogotá'){
    $suma_horas=$hor_extras*30000;
    $salario=3000000+$suma_horas+$aux_transporte;

    echo "Pago horas extras: ". $suma_horas, '<br>';
    echo "Total salario: ", $salario;

}elseif ($ciudad=='Cali'){
    $suma_horas=$hor_extras*20000;
    $salario=3000000+$suma_horas+$aux_transporte;

    echo "Pago horas extras: ". $suma_horas, '<br>';
    echo "Total salario: ", $salario;
    
}elseif ($ciudad=='Medellín'){
    $suma_horas=$hor_extras*25000;
    $salario=3000000+$suma_horas+$aux_transporte;

    echo "Total horas extras: ". $suma_horas, '<br>';
    echo "Total salario: ", $salario;
    
}


/* $ocupacion=$_REQUEST['ocupacion'];

if ($ocupacion=='ingeniero'){
    $descuento_ingeniero=3000000 * 0.1;
    $sueldo_ingeniero=(3000000 - $descuento_ingeniero) + $aux_transporte;
    echo "Sueldo total ingeniero: ", $sueldo_ingeniero;
} else if ($ocupacion=='tecnologo'){
    $descuento_tecnologo=2000000 * 0.05;
    $sueldo_tecnologo=(2000000 - $descuento_tecnologo) + $aux_transporte;
    echo "Sueldo total tecnólogo: ", $sueldo_tecnologo;
}  */

?>
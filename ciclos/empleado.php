<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo por horas</title>
</head>
<body>
    <h1>Calcular sueldo de trabajadores </h1>
    <?php
        if (empty($_REQUEST)){
    ?>  
        
        <form action="" method="POST">
            <label for="">Número de empleados</label>
            <input type="number" name="n_empleados">
            <input type="submit" value="Enviar">
        </form>
    
    <?php
        }elseif(isset($_REQUEST['n_empleados'])){
    ?>

        <form action="" method="POST">

    <?php
        $empleados=$_REQUEST['n_empleados'];
        for($i=0; $i<$empleados; $i++){
    ?>

            Nombre del empleado
            <input type="text" name="nombre[]" value="">
            <br>
            Horas trabajas
            <input type="number" name="horas[]" value="">
            <br>
            Ocupación
            <select name="ocupacion[]" id="">
                <option value="Tecnólogo">Tecnólogo</option>
                <option value="Ingeniero">Ingeniero</option>
            </select>
            <br><br>
    <?php        
        }
    ?>
            <input type="submit" value="Enviar">
        </form>

    <?php    
        }else{
            $cont = 0;
            $horas_tec = 12500;
            $horas_ing = 18750;
            $salarios = $_REQUEST['horas'];
            $nombres_emp = $_REQUEST['nombre'];
            $ocupaciones = $_REQUEST['ocupacion'];
            foreach($salarios as $horas){
                echo "<p>Nombre:  $nombres_emp[$cont]</p>";
                echo "<p>Ocupación:  $ocupaciones[$cont]</p>";
                if ($horas>160 && $ocupaciones[$cont]=="Tecnólogo"){
                    $resta_horas = $horas - 160;
                    $suma_extras = $resta_horas * $horas_tec;
                    $total = $suma_extras + ($horas_tec * 160);
                    echo "Horas extras: ", $resta_horas. '<br>';
                    echo "Pago horas extras: ", $suma_extras. '<br>';
                    echo "Salario total: ", $total. '<br>';
                    echo "________________________";
                }elseif ($horas<=160 && $ocupaciones[$cont]=="Tecnólogo"){
                    $total = $horas * $horas_tec;
                    echo "Horas extras : 0". '<br>'; 
                    echo "Salario total: ", $total. '<br>';
                    echo "________________________";
                }elseif ($horas>160 && $ocupaciones[$cont]=="Ingeniero"){
                    $resta_horas = $horas - 160;
                    $suma_extras = $resta_horas * $horas_ing;
                    $total = $suma_extras + ($horas_ing * 160);
                    echo "Horas extras: ", $resta_horas. '<br>';
                    echo "Pago horas extras: ", $suma_extras. '<br>';
                    echo "Salario total: ", $total. '<br>';
                    echo "________________________";
                }elseif ($horas<=160 && $ocupaciones[$cont]=="Ingeniero"){
                    $total = $horas * $horas_ing;
                    echo "Horas extras : 0". '<br>';
                    echo "Salario total: ", $total. '<br>';
                    echo "________________________";
                }
                $cont++;
            }



        }

    
    ?>

</body>
</html>
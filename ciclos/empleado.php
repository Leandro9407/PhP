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
                <option value="tecnologo">Tecnólogo</option>
                <option value="ingeniero">Ingeniero</option>
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
                if ($horas>160 && $ocupaciones[$cont]=="tecnologo"){
                    $resta_horas = $horas - 160;
                    $suma_extras = $resta_horas * $horas_tec;
                    $total = $suma_extras + 160;
                    echo "Horas extras: ", $resta_horas;
                    echo "Salario total: ", $total;
                    '<br>';
                }elseif ($horas<=160 && $ocupaciones[$cont]=="tecnologo"){
                    $total = $horas * $horas_tec;
                    echo "Horas extras : 0"; 
                    echo "Salario total: ", $total;
                }elseif ($horas>160 && $ocupaciones[$cont]=="ingeniero"){
                    $resta_horas = $horas - 160;
                    $suma_extras = $resta_horas * $horas_ing;
                    $total = $suma_extras + 160;
                    echo "Horas extras: ", $resta_horas;
                    echo "Salario total: ", $total;
                    '<br>';
                }elseif ($horas<=160 && $ocupaciones[$cont]=="ingeniero"){
                    $total = $horas * $horas_ing;
                    echo "Horas extras : 0"; '<br>';
                    echo "Salario total: ", $total;

                }
                $cont++;
            }



        }

    
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="POST">
    
    <label for="">Número de documento</label>
        <input type="number" name="n_documento"> <br><br>

    <label for="">Nombre</label>
        <input type="text" name="nombre"> <br><br>

    <label for="">Apellido</label>
        <input type="text" name="apellido"> <br><br>

    <label for="">Email</label>
        <input type="text" name="email"> <br><br> 

    <label for="">Teléfono</label>    
        <input type="number" name="telefono"> <br><br>

    <label for="">Dirección</label>
        <input type="text" name="direccion"> <br><br>

    <label for="">Fecha de nacimiento</label>
        <input type="number" name="f_nacimiento"> <br><br>

    <label for="">Género</label>
        <input type="text" name="genero"> <br><br>
        
    <label for="">Estado civil</label>
        <input type="text" name="estado_civil"> <br><br>

    <label for="">Auxilio de transporte</label>   
        <input type="number" name="aux_transporte"> <br><br>
    
    <label for="">Horas trabajadas</label>
        <input type="number" name="horas"> <br><br>

    <label for="">Ciudad</label>
    <select name="ciudad" id="">
        <option value="bogota">Bogotá</option>
        <option value="cali">Calí</option>
        <option value="medellín">Medellín</option>
    </select>
    <br><br>
    
   <!-- <label for="">Ocupación</label>    
    <select name="ocupacion" id="">
        <option value="ingeniero">Ingeniero</option>
        <option value="tecnologo">Tecnólogo</option>
    </select>
    <br><br>  -->

    <input type="submit" name="Enviar">   
        
    </form>
</body>
</html>
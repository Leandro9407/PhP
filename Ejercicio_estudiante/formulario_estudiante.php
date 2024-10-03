<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio estudiante</title>
</head>
<body>
    <form action="ingresar_estudiante.php" method="POST">

        <label for="">Documento:</label>
            <input type="number" name="documento"> <br><br>

        <label for="">Nombre:</label>
            <input type="text" name="nombre"> <br><br>
            
        <label for="">Apellido</label>
            <input type="text" name="apellido"> <br><br>

        <label for="">Email:</label>
            <input type="text" name="email"> <br><br>

        <label for="">Edad:</label>
            <input type="number" name="edad"> <br><br>

        <label for="">Nota 1:</label>
            <input type="number" step="0.001" name="nota_1"> <br><br>
            
        <label for="">Nota 2:</label>
            <input type="number" step="0.001" name="nota_2"> <br><br>
            
        <label for="">Nota 3:</label>
            <input type="number" step="0.001" name="nota_3"> <br><br>


        <input type="submit" value="Ingresar">
    </form>    

</body>
</html>
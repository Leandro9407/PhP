<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de hardware</title>
</head>
<body>
    <form action="insumos_tienda.php" method="POST">
        <label for="">Documento</label>
            <input type="number" name="documento"> <br><br>
        <label for="">Nombre</label>
            <input type="text" name="nombre"> <br><br>
        <label for="">Teléfono</label>    
            <input type="number" name="telefono"> <br><br>
        <label for="">Producto</label> 
            <select name="productos" id=""> 
                <option value="Monitor">Monitor</option>
                <option value="Teclado">Teclado</option>
                <option value="Board">Board</option>
                <option value="Mouse">Mouse</option>
                <option value="Cámara">Cámara</option>
            </select>
            <br><br>  
        <label for="">Cantidad</label>
            <input type="number" name="cantidad"> <br><br>
        <label for="">Efectivo</label> 
            <input type="number" name="efectivo"> <br><br>

            <input type="submit" value="Enviar">
    </form>
        
</body>
</html>
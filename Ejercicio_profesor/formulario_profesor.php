<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos profesores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>        
<body>
    <form action="ingresar_profesor.php" method="POST">
        <div class="container-sm bg-secondary mt-4 p-4 rounded-4 border-primary shadow-sm">
            <h1 class="text-light">Datos profesor</h1>
            <div class="row g-3 mb-4">
                <div class="col ">
                    <label for="" class="text-light fs-5">Documento</label>
                    <input type="text" class="form-control" name="documento" aria-label="First name">
                </div>
                <div class="col">
                    <label for="" class="text-light fs-5">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" aria-label="Last name">
                </div>
            </div>
            <div class="row g-3 mb-4">
                <div class="col">
                    <label for="" class="text-light fs-5" >Edad</label>
                    <input type="text" class="form-control" name="edad" aria-label="First name">
                </div>
                <div class="col">
                    <label for="" class="text-light fs-5">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" aria-label="Last name">
                </div>
            </div>
            <div class="row g-3 mb-4">
                <div class="col">
                    <label for="" class="text-light fs-5">Email</label>
                    <input type="text" class="form-control" name="email" aria-label="First name">
                </div>
                <div class="col">
                    <label for="" class="text-light fs-5">Asignatura</label>
                    <input type="text" class="form-control" name="asignatura" aria-label="Last name">
                </div>
            </div>

            <button type="button" class="btn btn-primary">Enviar</button>
        </div>
    </form>

</body>
</html>
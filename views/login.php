<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- enlace boottrap para el css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>login</title>
</head>

<body>

    <?php include "../models/conexion.php"; ?>

    <div class="container col-5 p-3 mb-2 text-center">
        <h3>JUGEMOS A REPARTIR PUNTOS</h3>
    </div>
    <div class="container col-3 p-3 mb-2">
        <?php include "../controllers/login.php" ?>
        <form method="post">
            <div class="mb-3">
                <label for="labelNombre" class="form-label">Ingresa tu Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="">
            </div>
            <div class="mb-3">
                <label for="labelContraseña" class="form-label">Ingresa tu password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="">
            </div>
            <div class="mb-3 text-center">
                <a href="registrar.php">¿No tienes cuenta? Registrate</a>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary" value="ok" name="btnIngresar">INGRESAR</button>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-success" value="ok" name="btnAdminitrador">ADMINISTRADOR</button>
            </div>
        </form>
    </div>






    <!-- enlace boottrap	para el jaavascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
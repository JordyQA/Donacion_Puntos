<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- enlace boottrap para el css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>REGISTRAR JUGADOR</title>
</head>

<body>
    <div class="container col-5 p-3 mb-2">
        <center>
            <h3>JUGEMOS A REPARTIR PUNTOS</h3>
        </center>
    </div>

    <div class="container col-3 p-3 mb-2">
        <?php include "../controllers/registrarUsuario.php"; ?>
        <form method="post">

            <div class="mb-3">
                <label for="labelDNI" class="form-label">Ingresa tu DNI:</label>
                <input type="text" pattern="[0-9]{8}" class="form-control" id="dni" name="dni" placeholder="DNI" values="">
                <div id="solicitudDNI" class="form-text">Recuerda: Solo debes ingresar los 8 numeros de tu DNI.</div>
            </div>
            <div class="mb-3">
                <label for="labelNombre" class="form-label">Ingresa tu Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" values="">
            </div>
            <div class="mb-3">
                <label for="labelContraseña" class="form-label">Ingresa tu password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" values="">
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary" value="ok" name="btnRegistrar">REGISTRAR</button>
                <a href="login.php" class="btn btn-danger">INICIAR SESION</a>
            </div>
        </form>
    </div>






    <!-- enlace boottrap	para el jaavascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
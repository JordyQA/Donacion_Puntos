<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- enlace boottrap para el css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>DONAR PUNTOS JUGADOR</title>
</head>

<body>

    <div class="container col-5 p-3 mb-2 text-center">
        <h1>BIENVENIDO ES MOMENTO DE DONAR PUNTOS</h1>
    </div>
    <div class="container col-3 p-3 mb-2">
        <?php include "../controllers/Transacciones.php"; ?>
        <form method="post">

            <div class="mb-3">
                <label for="labelPuntos">Cantidad de puntos:</label>
                <select class="form-select" value="" disabled>
                    <option selected><?php mostrarPuntos(); ?> puntos</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="labelReceptor">Nombre del usario donante:</label>
                <select class="form-select" name="usuarioDonante" value="" disabled>
                    <?php
                    $nombre = nombreUsuarioLogeado();
                    echo "<option value='$usuario'>$usuario</option>";
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="labelReceptor">Seleccione al usuario a donar puntos:</label>
                <select class="form-select" name="usuarioReceptor" aria-label="" value="">
                    <?php
                    $usuarios = mostrarUsuarios();
                    foreach ($usuarios as $usuario) {
                        echo "<option value='$usuario'>$usuario</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="labelDonarPuntos" class="form-label">Ingresa la cantidad de puntos a donar:</label>
                <input type="text" class="form-control" id="puntosDonar" aria-describedby="emailHelp" value="" name="puntosDonar">
                <div id="puntosDonar" class="form-text">Recuerda:Los puntos a donar deben ser menos que los puntos que tienes.</div>
            </div>

            <!-- boton que permite realizar la donacion de puntos -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary" value="ok" name="btnDonar">DONAR</button>
            </div>

            <!-- boton que le permite cesarr cesion del usuaruario -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-danger" value="ok" name="btnCerrarSesion">CERRAR SESIÓN</button>
            </div>

        </form>




        <!-- enlace boottrap	para el jaavascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
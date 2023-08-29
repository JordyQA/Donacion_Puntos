<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- enlace boottrap para el css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Lista de Donaciones</title>

</head>

<body>
    <div class="container">
        <?php include "../controllers/mostrarTable.php"; ?>
        <div class="col-sm-9 p-3 text-center">
            <h2>REGISTRO DE LAS DONACIONES REALIZADAS</h2>
        </div>

        <div class="col-sm-9 p-3 text-center">
            <table class="table">
                <thead class="table-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">DONADOR</th>
                        <th scope="col">RECEPTOR</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php mostrarDatos(); ?>
                </tbody>
            </table>
        </div>
        <!-- boton para cerrar cesion -->
        <div class="mb-3 text-center col-sm-9 p-3">
            <form action="" method="post">
            <button type="submit" class="btn btn-danger" value="ok" name="btnSalir">SALIR</button>
            </form>
        </div>

    </div>



    <!-- enlace boottrap	para el jaavascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
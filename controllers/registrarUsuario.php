<?php
include "../models/conexion.php";
if (!empty($_POST["btnRegistrar"])) {
    if (!empty($_POST["dni"]) and !empty($_POST["nombre"]) and !empty($_POST["password"])) 
    {

        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $puntos = 200;
        $password = $_POST["password"];
        // encriptamos la contraseña cosa que si desamos recuperarla no se podra y nos obligara 
        // cambiar la contraseña para ello usamos el sigfuiente codifo
        // $password_hash= password_hash($password,PASSWORD_BCRYPT);

        // generaremos la validacion para ver si el usuaio existe o no

        $validacion = $conexion->query("select * from jugadores where dni='$dni' or nombre='$nombre'");

        if ($validacion->num_rows > 0) {
            echo '<div class="alert alert-danger">Jugador ya registrado</div>';
        } else {

            $sql = $conexion->query("insert into jugadores(dni,nombre,punto,contraseña) 
            values('$dni','$nombre','$puntos','$password')");

            if ($sql == 1) {
                echo '<div class="alert alert-success"> Persona Registrada correctamente</div>';
                $dni = '';
                $nombre = '';
                $password = '';
            } else {

                echo '<div class="alert alert-danger">Error al registrar persona</div>';
            }
        }
    } else {
        print "¡Error BD!: " . $e->getMessage() . "<br/>";
        die();
        echo '<div class="alert alert-warning">Algunos campos estan vacios</div>';
    }
}

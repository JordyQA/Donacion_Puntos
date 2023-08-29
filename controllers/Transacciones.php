<?php
include "../models/conexion.php";
$usuario = "";

session_start();

if (isset($_SESSION["nombre"])) {
    $nombre = $_SESSION["nombre"];
    $usuario = $nombre;
}

//obtenemos el nobre del usaurio de la sesion
function nombreUsuarioLogeado()
{
    global $usuario;
    return $usuario;
}

function mostrarPuntos()
{
    include "../models/conexion.php";
    global $usuario;
    $sql = $conexion->query("select * from jugadores where nombre='$usuario'");

    if ($sql->num_rows > 0) {
        // El usuario existe, mostrar puntos
        $fila = $sql->fetch_assoc();
        $puntos = $fila['punto'];
        echo  $puntos;
    } else {
        // El usuario no existe
        echo "El usuario $usuario no existe.";
    }
}


function mostrarUsuarios()
{
    include "../models/conexion.php";
    $usuarios = array();
    $sql = $conexion->query("select * from jugadores");
    while ($datos = $sql->fetch_object()) {
        $usuario[] = $datos->nombre;
    }
    return $usuario;
}

if (!empty($_POST["btnDonar"])) {
    if (!empty($_POST["usuarioReceptor"]) and !empty($_POST["puntosDonar"])) {
        $usuarioDonante = $usuario;
        $usuarioReceptor = $_POST["usuarioReceptor"];
        $puntosDonar = $_POST["puntosDonar"];

        //obtenemos la cantidad de puntos del juador para poder validar si lo donado es fatible
        $cantidadPuntosDonante = $conexion->query("select * from jugadores where nombre='$usuarioDonante'");
        $cantidadPuntosReceptor = $conexion->query("select * from jugadores where nombre='$usuarioReceptor'");

        if ($cantidadPuntosDonante->num_rows > 0) {
            $numPuntosDonante = $cantidadPuntosDonante->fetch_assoc();
            $puntosJugadorDonante = $numPuntosDonante["punto"];

            $numPuntosReceptor = $cantidadPuntosReceptor->fetch_assoc();
            $puntosJugadorReceptor = $numPuntosReceptor["punto"];

            // validamso que los puntos sean menor o igual a los puntos que tiene
            if ($puntosJugadorDonante >= $puntosDonar) {
                // realizamos la donacion de puntos
                $nuevosPuntosDonante = $puntosJugadorDonante - $puntosDonar;
                $nuevosPuntosReceptor = $puntosJugadorReceptor + $puntosDonar;
                // realizamos la actualizacion de puntos del jugador en la base de datos
                $atualizarPuntosDonante = $conexion->query("update jugadores set punto='$nuevosPuntosDonante' where nombre='$usuarioDonante'");
                $actualzarPuntosReceptor = $conexion->query("update jugadores set punto='$nuevosPuntosReceptor' where nombre='$usuarioReceptor'");


                //generamos la insercion de los datos dentro de la tabal transacciones
                $sql = $conexion->query("insert into transacciones(donador,receptor,cantidad) values('$usuarioDonante','$usuarioReceptor','$puntosDonar')");

                if ($sql == true) {
                    echo '<div class="alert alert-success">Donacion realizada correctamente: se donaron ' . $puntosDonar . '. </div>';

                } else {

                    echo '<div class="alert alert-danger">Error al donar puntos</div>';
                }
            } else {
                echo '<div class="alert alert-danger">El jugador ' . $usuarioDonante . ' no tiene suficientes puntos</div>';
            }
        } else {
            echo '<div class="alert alert-danger">El jugador seleccionado con el nombre de ' . $usuarioReceptor . ' no existe</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos campos estan vacios</div>';
    }
}


if(!empty($_POST["btnCerrarSesion"])) {
    session_start();
    session_destroy();
    header("Location: login.php");
    exit();
}
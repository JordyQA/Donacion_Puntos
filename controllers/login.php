<?php
include "../models/conexion.php";
session_start();
if (!empty($_POST["btnIngresar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["password"])) {
        $nombre = $_POST["nombre"];
        $password = $_POST["password"];


        $validacion = $conexion->query("select * from jugadores where nombre='$nombre'");

        if ($validacion->num_rows > 0) {
            $sql = $conexion->query("select * from jugadores where nombre = '$nombre' and contraseña ='$password'");

            if ($datos = $sql->fetch_object()) {
                $_SESSION['nombre'] = $nombre; //almacenamos el nombre de usuario en una sesion
                header("location:Donacion.php");
            } else {
                echo '<div class="alert alert-danger">El usuario o la Contraseña estan incorrectos</div>';
                $nombre = "";
                $password = "";
            }
        } else {
            echo '<div class="alert alert-danger">El usuario no esta registrado</div>';
            $nombre = "";
            $password = "";
        }
    } else {
        echo '<div class="alert alert-warning">Algunos campos estan vacios</div>';
    }
}

if (!empty($_POST["btnAdminitrador"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["password"])) {
        $nombre = $_POST["nombre"];
        $password = $_POST["password"];


        $validacion = $conexion->query("select * from administradores where usuario ='$nombre'");

        if ($validacion->num_rows > 0) {
            $sql = $conexion->query("select * from administradores where usuario = '$nombre' and contraseña ='$password'");

            if ($datos = $sql->fetch_object()) {
                $_SESSION['nombre'] = $nombre; //almacenamos el nombre de usuario en una sesion
                header("location:listadoDonaciones.php");
            } else {
                echo '<div class="alert alert-danger">El usuario o la Contraseña estan incorrectos</div>';
                $nombre = "";
                $password = "";
            }
        } else {
            echo '<div class="alert alert-danger">El usuario no esta registrado</div>';
            $nombre = "";
            $password = "";
        }
    } else {
        echo '<div class="alert alert-warning">Algunos campos estan vacios</div>';
    }
}

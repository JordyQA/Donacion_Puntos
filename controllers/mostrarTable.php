<?php
include "../models/conexion.php";

if (!empty($_POST["btnSalir"])) {
        session_start();
        session_destroy();
        header("Location: login.php");
        exit();
}

function mostrarDatos()
{
        include "../models/conexion.php";
        $sql = $conexion->query("select * from transacciones");
        while ($datos = $sql->fetch_object()) { ?>

                <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->donador ?></td>
                        <td><?= $datos->receptor ?></td>
                        <td><?= $datos->cantidad ?></td>
                        <td><?= $datos->fecha ?></td>
                </tr>

<?php


        }
}
?>
<?php

$conexion = mysqli_connect("localhost", "root", "", "lol");

if(mysqli_connect_error()){

    echo "Error no se ha podido conectar" . mysqli_connect_error();
    exit();
}

echo "Se ha conectado correctamente a la base de datos";
?>
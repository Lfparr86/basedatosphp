
<?php

$conexion = mysqli_connect("localhost", "root", "", "lol");

if(mysqli_connect_error()){

    echo "Error no se ha podido conectar" . mysqli_connect_error();
    exit();
}

$consulta = "SELECT * FROM `champ`";

$usuario = mysqli_query($conexion, $consulta);

if($usuario){
    foreach($usuario as $us){
        echo "$us[id] $us[name] $us[rol] $us[difficulty] $us[description] <br>";
    }
}
?>
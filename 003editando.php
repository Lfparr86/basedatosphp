<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
  <?php

  $id = $_GET["id"];

  $conexion = mysqli_connect("localhost", "root", "", "lol");

if(mysqli_connect_error()){

    echo "Error no se ha podido conectar" . mysqli_connect_error();
    exit();
}
if(isset($id)){

  $consulta = "SELECT * FROM `champ` where id = $id";

$usuario = mysqli_query($conexion, $consulta);

if ($usuario) {
  foreach($usuario as $us){

  }
}

}
?>
<form action="" method="get">
<label for="id">ID</label>
<input type="text" name="id" id="id" value="$_GET=id">
<label for="">Nombre</label>
<input type="text" name="name" id="name" value="<?php echo"$us[name] "?>">
<label for="">Rol</label>
<input type="text" name="rol" id="rol" value="<?php echo"$us[rol] "?>>
<label for="">Dificultad</label>
<select>
<option value="<?php echo"$us[difficulty] "?>>baja</option>
<option value="<?php echo"$us[difficulty] "?>>media</option>
<option value="<?php echo"$us[difficulty] "?>>alta</option>
</select>
<label for="">Descripción</label>
<input type="textarea rows="20" cols="20" name="description" id="description" value="<?php echo"$us[description] "?>>





</form>
</body>
</html>
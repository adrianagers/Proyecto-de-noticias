<?php

// primero lo que realizamos es realizar la conexion
require('conexion.php');

// seleccionamos todos los datos de la tabla videojuegos

$sql = "SELECT * FROM videojuegos";

// crear una variable que guarde el resultado de la consulta en la BD
$resultado = mysqli_query($conexion,$sql);

// crearemos una variable que se encargará de manipular y conetener 
// }el resultado ya que éste nos devorverá un arreglo 
$videojuegos =mysqli_fetch_all($resultado)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar videojuegos ::</title>
</head>
<body>
    <form action="insertar.php" method="GET">
    <input type="text" name="videojuego">
    <button type="submit">Agregar</button>
    <!-- <button type="submit">editar</button> -->

    </form>
    <?php foreach ($videojuegos as $videojuego ):?>
<h1>
<?php echo $videojuego[1]; ?>
<a href="eliminar.php?id=<?php echo $videojuego[0]?>">X</a>
<input><a href="editar.php?id= <?php echo $videojuego[1]?>">editar</a></input>
</h1>

    <?php endforeach; ?>
</body>
</html>
<?php
// este archivo realiza la conexion, para que asi pueda interactuar con la base de datos 
require('conexion.php');
// vamos a crear una variable que traiga los datos que el usuario envía desde un formulario
$videojuego = $_GET['videojuego'];
// crearemos una variable que se va a encargar de contener la sentencia sql 
// paa guardar los datos en la tabla videojuegos de la BD bictia

$sql = "INSERT INTO videojuegos (nombre) VALUE ('$videojuego')";
// el metodo mysqli_query() se encarga de enviar los datos 
// necesitando la conexion y la sentencia sql
mysqli_query($conexion, $sql);

//direccionamiento de rutas 

header('Location: mostrar.php');

?>
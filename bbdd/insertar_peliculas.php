<?php

$conectar = mysqli_connect("localhost","root","","dmb");

$insertar = "INSERT INTO peliculas (nombre, director, estreno,) 
			VALUES ('$_POST[nombre]', '$_POST[dir]', '$_POST[estreno]')";

if (!mysqli_query($conectar, $insertar)){
	die ("No se ha podido añadir la pelicula (Error:". mysqli_connect_error() .")");
}

echo("Pelicula añadida correctamente. Ahora seras redireccionado a la pagina principal");

header("Location: ../index.php");
?>
<?php

require("conectarBD.php");

$insertar = "INSERT INTO peliculas (nombre, director, estreno) 
			VALUES ('$_POST[nombre]', '$_POST[dir]', '$_POST[estreno]')";

if (!mysqli_query($conectar, $insertar)){
	die ("No se ha podido añadir la pelicula");
}

header("Location: listado_peliculas.php");
?>
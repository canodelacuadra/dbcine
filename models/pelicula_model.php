<?php
require_once "../config.php";
include_once "../libreria.php";
//echo $id;

try {
    $id = escape($_GET['id']);
    $conexion = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT peliculas.id AS id, 
peliculas.pelicula AS pelicula, 
peliculas.fecha AS produccion,
peliculas.sinopsis AS sinopsis,
generos.genero AS genero,
generos.id AS genero_id,
nacionalidades.nacionalidad AS nacionalidad,
nacionalidades.id AS nacionalidad_id, 
peliculas.puntuacion_media AS puntos,
peliculas.num_votos AS votos
 FROM peliculas
JOIN generos on peliculas.genero = generos.id
JOIN nacionalidades  on peliculas.nacionalidad = nacionalidades.id
 
 WHERE peliculas.id=$id";

    $consulta = $conexion->prepare($sql);
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();

    while ($row = $consulta->fetch()) {
        $rows[] = $row;
    }
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
$sql = null;
$conexion = null;

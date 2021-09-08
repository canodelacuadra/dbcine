<?php
require "../config.php";
try {
    $conexion = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT peliculas.id AS id, 
peliculas.pelicula AS pelicula, 
peliculas.fecha AS produccion,
generos.genero AS genero,
nacionalidades.nacionalidad AS nacionalidad, 
peliculas.puntuacion_media AS puntos,
peliculas.num_votos AS votos
 FROM peliculas
JOIN generos on peliculas.genero = generos.id
JOIN nacionalidades  on peliculas.nacionalidad = nacionalidades.id ";
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

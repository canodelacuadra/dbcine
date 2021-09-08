<?php
require "../config.php";
// nos colocamos por defecto en la página 1
if (isset($_GET['pagina_no'])) {
    $pagina_no = $_GET['pagina_no'];
} else {
    $pagina_no = 1;
}
// configuración del límite de paginas y el offset

$limit = 10;
$offset = ($pagina_no - 1) * $limit;
try {
    $conexion = new PDO($dsn, $username, $password, $options);
    //obtenemos el número de páginas
    $sql_num = "SELECT COUNT(*) FROM peliculas";
    $consulta_num = $conexion->prepare($sql_num);
    $consulta_num->setFetchMode(PDO::FETCH_ASSOC);
    $consulta_num->execute();
    // almacenamos en $num_rows el resultado
    $num_rows = $consulta_num->fetchColumn();
    // obtenemos el numero de paginas redondeado fracciones hacia arriba
    $num_paginas = ceil($num_rows / $limit);
    //hacemos la consulta final que deseamos pasándole limit y offset
    $sql = "SELECT peliculas.id AS id, 
peliculas.pelicula AS pelicula, 
peliculas.fecha AS produccion,
generos.genero AS genero,
nacionalidades.nacionalidad AS nacionalidad, 
peliculas.puntuacion_media AS puntos,
peliculas.num_votos AS votos
 FROM peliculas
JOIN generos on peliculas.genero = generos.id
JOIN nacionalidades  on peliculas.nacionalidad = nacionalidades.id 
ORDER BY  peliculas.pelicula
LIMIT $offset, $limit
";
    $consulta = $conexion->prepare($sql);
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();

    while ($row = $consulta->fetch()) {
        $rows[] = $row;
    }
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
$sql_num = null;
$sql = null;
$conexion = null;

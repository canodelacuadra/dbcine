<?php

/**
 * Recogemos los datos de un formulario HTML
 *
 */

// primero si lo hacemos por genero
if (isset($_POST['submit_buscar_genero'])) {
    require_once "../config.php";
    require_once "../libreria.php";
    $genero = $_POST['genero'];
    //echo $genero;

    try {
        $connection = new PDO($dsn, $username, $password, $options);

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
        WHERE generos.id = :genero";


        $consulta = $connection->prepare($sql);
        $consulta->bindParam(':genero', $genero, PDO::PARAM_STR);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        while ($row = $consulta->fetch()) {
            $rows[] = $row;
        }
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
// en caso de que sea por nacionalidad
if (isset($_POST['submit_buscar_nacionalidad'])) {
    require_once "../config.php";
    require_once "../libreria.php";
    $nacionalidad = $_POST['nacionalidad'];
    echo $nacionalidad;

    try {
        $connection = new PDO($dsn, $username, $password, $options);

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
        WHERE nacionalidades.id = :nacionalidad";


        $consulta = $connection->prepare($sql);
        $consulta->bindParam(':nacionalidad', $nacionalidad, PDO::PARAM_STR);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();

        while ($row = $consulta->fetch()) {
            $rows[] = $row;
        }
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

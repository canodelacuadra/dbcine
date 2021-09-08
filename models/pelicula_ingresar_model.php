<?php

/**
 * Recogemos los datos de un formulario HTML
 *
 */


if (isset($_POST['submit'])) {
    require "../config.php";
    require "../libreria.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $nueva_pelicula = array(
            "pelicula" => escape($_POST['pelicula']),
            "fecha" => escape($_POST['fecha']),
            "genero" => escape($_POST['genero']),
            "nacionalidad" => escape($_POST['nacionalidad']),
            "sinopsis" => escape($_POST['sinopsis'])

        );
        $sql = "INSERT INTO peliculas (pelicula, fecha, genero,nacionalidad, sinopsis) 
        values (:pelicula, :fecha, :genero, :nacionalidad, :sinopsis)";

        $statement = $connection->prepare($sql);
        // no hacemos bind pues los nombres de las proiedades coinciden con las columnas
        $statement->execute($nueva_pelicula);
        //pasamos mensaje a la vista
        $mensaje = "La película <strong> " . $nueva_pelicula['pelicula'] . " </strong> ha sido registrada con éxito en nuestra base de datos";
    } catch (PDOException $error) {
        //pasamos mensaje a la vista
        $mensaje = $sql . "<br>" . $error->getMessage();
    }
}

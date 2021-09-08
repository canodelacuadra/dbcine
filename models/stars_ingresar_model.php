<?php

/**
 * Recogemos los datos de un formulario HTML
 *
 */


if (isset($_POST['submit_valoracion'])) {
    require_once "../config.php";
    require_once "../libreria.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $array = array(
            "pelicula" => escape($_GET['id']),
            "usuario" => escape($_SESSION['id']),
            "calificacion" => escape($_POST['calificacion']),
            "comentarios" => escape($_POST['comentarios'])
        );


        $sql = "INSERT INTO stars (pelicula, usuario, calificacion,comentarios) 
        values (:pelicula, :usuario, :calificacion, :comentarios)";

        $statement = $connection->prepare($sql);
        // no hacemos bind pues los nombres de las proiedades coinciden con las columnas

        $statement->execute($array);
        //pasamos mensaje a la vista

        $mensaje = "Hemos registrado la valoración de La película <strong> " . $array['pelicula'] . " </strong> con éxito";
    } catch (PDOException $error) {
        //pasamos mensaje a la vista
        $mensaje = $sql . "<br>" . $error->getMessage();
    }
}
$sql = null;
$conexion = null;

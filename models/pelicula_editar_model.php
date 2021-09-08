<?php

/**
 * Recogemos los datos de un formulario HTML
 *
 */


if (isset($_POST['submit'])) {
    require_once "../config.php";
    require_once "../libreria.php";
    $id = $_GET['id'];
    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $pelicula = array(
            "pelicula" => escape($_POST['pelicula']),
            "fecha" => escape($_POST['fecha']),
            "genero" => escape($_POST['genero']),
            "nacionalidad" => escape($_POST['nacionalidad']),
            "sinopsis" => escape($_POST['sinopsis'])

        );
        $sql = "UPDATE peliculas SET 
        pelicula =:pelicula,
         fecha=:fecha, 
         genero=:genero,
         nacionalidad=:nacionalidad,
          sinopsis=:sinopsis 
    
        WHERE 
        id=$id ";


        $statement = $connection->prepare($sql);
        // no hacemos bind pues los nombres de las proiedades coinciden con las columnas
        $statement->execute($pelicula);
        // pasamos mensaje a la vista
        $mensaje = " Ha sido modificada la película en nuestra base de datos";
    } catch (PDOException $error) {
        //pasamos mensaje a la vista
        $mensaje = $sql . "<br>" . $error->getMessage();
    }
}

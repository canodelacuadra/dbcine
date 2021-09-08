<?php
require_once "../config.php";
include_once "../libreria.php";
if (isset($_POST['submit'])) {
    try {
        $id = escape($_POST['id']);
        $conexion = new PDO($dsn, $username, $password, $options);

        $sql = "DELETE FROM peliculas 
                WHERE pelicula = :id;
                DELETE FROM peliculas 
                WHERE id = :id;";

        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();
        header('location:/peliculas');
        $message = 'El registro ha sido borrado con éxito';
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
    $sql = null;
    $conexion = null;
}

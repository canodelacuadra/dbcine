<?php
require_once "../config.php";
include_once "../libreria.php";
//echo $id;

try {
    $id = escape($_GET['id']);
    $conexion = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT 
    stars.id AS id,
    stars.pelicula AS pelicula , 
    stars.calificacion AS calificacion,
    stars.comentarios AS comentarios,
    stars.creado AS creado,
    usuarios.usuario AS usuario
    FROM stars
    JOIN usuarios on stars.usuario = usuarios.id

 
 WHERE pelicula =$id
 ORDER BY id DESC;";

    $consulta = $conexion->prepare($sql);
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();

    while ($fila = $consulta->fetch()) {
        $filas[] = $fila;
    }
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

$sql = null;
$conexion = null;

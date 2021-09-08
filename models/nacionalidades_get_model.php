<?php
require "../config.php";
try {
    $conexion = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT * FROM nacionalidades";
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

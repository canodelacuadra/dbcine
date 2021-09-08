<?php

/**
 * Abrimos una conexión via PDO para crear
 * una nueva database y tablas con datos de inicio.
 *
 */

require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);

    echo "Base de datos de cine con tabla películas creada con éxito.";
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

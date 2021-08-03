<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);

    echo "Base de datos de cine con tabla películas creada con éxtio.";
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

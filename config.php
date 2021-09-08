<?php

/**
 * Configuración para la conexión de la base de datos
 *
 */

$host       = "localhost";
$username   = "mydbcine";
$password   = "rYG4s7FV";
$dbname     = "cine"; // Lo usaremos después
$dsn        = "mysql:host=$host;dbname=$dbname;charset=utf8"; // lo usaremos después
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

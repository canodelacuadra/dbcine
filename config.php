<?php

/**
 * Configuración para la conexión de la base de datos
 *
 */

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cine"; // Lo usaremos después
$dsn        = "mysql:host=$host;dbname=$dbname"; // lo usaremos después
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

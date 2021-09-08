<?php
require "../config.php";
try {
    $conexion = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT * FROM generos";
    $consulta = $conexion->prepare($sql);
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();
    // set the resulting array to associative

    while ($row = $consulta->fetch()) {
        echo "<option value=" . $row['id'] . ">";
        echo $row['genero'];
        echo '</option>';
    }
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

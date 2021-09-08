<?php
require "../config.php";
try {
    $conexion = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT * FROM nacionalidades";
    $consulta = $conexion->prepare($sql);
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();


    while ($row = $consulta->fetch()) {
        echo "<option value=" . $row['id'] . ">";
        echo $row['nacionalidad'];
        echo '</option>';
    }
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

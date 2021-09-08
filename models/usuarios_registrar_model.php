<?php


/**
 * Recogemos los datos de un formulario HTML
 *
 */


if (isset($_POST['submit'])) {
    require "../config.php";
    require "../libreria.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $registro = array(
            "usuario" => escape($_POST['usuario']),
            "email" => escape($_POST['email'])

        );

        $sql = "INSERT INTO usuarios (usuario, email) 
        values (:usuario, :email)";

        $statement = $connection->prepare($sql);
        // no hacemos bind pues los nombres de las proiedades coinciden con las columnas
        $statement->execute($registro);
        // almacenamos dos variables en sesión
        $_SESSION['usuario']   = $registro['usuario'];
        $_SESSION['email']   = $registro['email'];
        $_SESSION['id']   = $connection->lastInsertId();

        //pasamos mensaje a la vista
        $mensaje = "El registro <strong> " . $registro['usuario'] . " </strong> ha sido registrada con éxito en nuestra base de datos <br>";
        //$mensaje += $_SESSION['usuario'] . ", has iniciado sesión con  el email:" . $_SESSION['email'];
    } catch (PDOException $error) {
        //pasamos mensaje a la vista
        $mensaje = $sql . "<br>" . $error->getMessage();
    }
}

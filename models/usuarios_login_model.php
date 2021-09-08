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
        $email = escape($_POST['email']);


        $sql = "SELECT * FROM  usuarios 
        WHERE email= :email";

        $consulta = $connection->prepare($sql);
        $consulta->bindParam(':email', $email, PDO::PARAM_STR);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();




        if ($consulta->rowCount() > 0) {
            while ($row = $consulta->fetch()) {
                // almacenamos las variables en sesión
                $_SESSION['usuario']   = $row['usuario'];
                $_SESSION['email']   = $row['email'];
                $_SESSION['id']   = $row['id'];
                header('location:/peliculas');
            }
        } else {
            //pasamos mensaje a la vista
            $mensaje = "No tenemos a nadie registrado con el email: $email  ";
        }
    } catch (PDOException $error) {
        //pasamos mensaje a la vista
        $mensaje = $sql . "<br>" . $error->getMessage();
    }
}

<?php

class Model
{


    public $sql;
    public $table;
    public $registro = array();
    public function __construct()
    {
    }
    public function filtrar($registro)
    {
        foreach ($registro as $clave) {
            $campos["$clave"] =  escape($_POST["$clave"]);
            return $campos;
        }
    }



    public function set_data($table, $registro)
    {
        if (isset($_POST['submit'])) :
            require "../config.php";
            require "../libreria.php";
            $this->filtrar($registro);
            $this->sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "$table",
                implode(", ", array_keys($registro)),
                ":" . implode(", :", array_keys($registro))
            );
            try {
                $connection = new PDO($dsn, $username, $password, $options);
                $statement = $connection->prepare($sql);
                // no hacemos bind pues los nombres de las proiedades coinciden con las columnas
                $statement->execute($registro);
                //pasamos mensaje a la vista
                $mensaje = "El registro ha sido registrada con éxito en nuestra base de datos";
                return $mensaje;
            } catch (PDOException $error) {
                //pasamos mensaje a la vista
                $mensaje = $sql . "<br>" . $error->getMessage();
                return $mensaje;
            }
        endif;
    }

    public function get_data()
    {
        //all other pages clicked will just return the created array rather than doing all the database work again..


    }
}

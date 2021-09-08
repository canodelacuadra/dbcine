<?php
include_once '../libreria.php';
if (isset($rows) && count($rows) > 0) :

?>
    <h2>Lista de <?php
                    echo count($rows);
                    if (isset($num_rows)) echo ' de ' . $num_rows;
                    ?> peliculas</h2>
    <p class='text-end'><a class='btn btn-success' href="/peliculas/ingresar">Añadir Pelicula</a></p>
    <table class='table table-striped'>
        <tr>
            <th>Id</th>
            <th>Película</th>
            <th>Producción</th>
            <th>Género</th>
            <th>Nacionalidad</th>
            <th>Media Puntos</th>
            <th>Rank</th>
            <th>Votos</th>
            <th>Calificar</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        foreach ($rows as  $clave) :
            echo '<tr>';
            echo '<td>';
            echo $clave['id'];
            echo '</td>';
        ?>
            <td><a href="/peliculas?id=<?php echo $clave['id']; ?> "><?php echo $clave['pelicula']; ?> </a></td>
            <?php

            echo '<td>';
            echo $clave['produccion'];
            echo '</td>';

            echo '<td>';
            echo $clave['genero'];
            echo '</td>';

            echo '<td>';
            echo $clave['nacionalidad'];
            echo '</td>';


            echo '<td>';
            echo $clave['puntos'];
            echo '</td>';
            ?>
            <td> <?php stars($clave['puntos']); ?></td>

            <?php
            echo '<td>';
            echo $clave['votos'];
            echo '</td>';
            ?>
            <td><a class='btn btn-secondary' title='calificar' href="/peliculas?id=<?php echo $clave['id']; ?>#stars_rating "><i class=" bi bi-chat-square-text"></i></a></td>
            <td><a class='btn btn-info' title='editar' href=" /peliculas/editar?id=<?php echo $clave['id']; ?> "><i class=" bi bi-scissors"></i></a></td>
            <td><?php
                //('Ubicación:'. $ _SERVER ['DOCUMENT_ROOT']. '/Abc.php'

                include('../controllers/pelicula_delete_controller.php ');
                ?></td>

        <?php

            echo '</tr>';
        endforeach;
        ?>
    </table>
<?php endif; ?>
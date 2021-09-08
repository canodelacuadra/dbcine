<?php

include "../templates/header.php";
if (isset($_GET['id'])) {
    require '../models/pelicula_model.php';
    require '../views/pelicula_view.php';
} else {
    include "../models/peliculas_paginacion_model.php";
    include "../views/peliculas_view.php";
    include "../views/peliculas_paginacion_view.php";
}

include "../templates/footer.php";

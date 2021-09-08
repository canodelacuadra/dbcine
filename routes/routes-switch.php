<?php
// enrutador simple pero no acepta variables 
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/':
        require  dirname(__DIR__, 1) . '/controllers/index_controller.php';
        break;
    case '':
        require  dirname(__DIR__, 1) . '/controllers/index_controller.php';
        break;
    case '/peliculas':
        require   dirname(__DIR__, 1) . '/controllers/peliculas_controller.php';
        break;

    case '/peliculas/buscar':
        require   dirname(__DIR__, 1) . '/controllers/peliculas_buscar_controller.php';
        break;
    case '/peliculas/ingresar':
        require   dirname(__DIR__, 1) . '/controllers/pelicula_ingresar_controller.php';
        break;
    case '/usuarios':
        require   dirname(__DIR__, 1) . '/controllers/usuarios_controller.php';
        break;
    default:
        http_response_code(404);
        require dirname(__DIR__, 1) . '/views/404.php';
        break;
}

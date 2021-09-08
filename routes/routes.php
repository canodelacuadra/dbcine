<?php
////// Enrutador basado en la variable de path
$request = $_SERVER['REQUEST_URI'];
//echo $request;
// obtenemos el path sin query (variables)
$path = parse_url($request, PHP_URL_PATH);
//path de index
if ($path == '' || $path == '/') {
    require   dirname(__DIR__, 1) . '/controllers/index_controller.php';
}
//path de peliculas
elseif ($path == '/peliculas' || $path == '/peliculas/') {
    require   dirname(__DIR__, 1) . '/controllers/peliculas_controller.php';
}
//path de ingresar pelicula
elseif ($path == '/peliculas/ingresar' || $path == '/peliculas/ingresar/') {
    require   dirname(__DIR__, 1) . '/controllers/pelicula_ingresar_controller.php';
}
//path de editar pelicula
elseif ($path == '/peliculas/editar' || $path == '/peliculas/editar/') {
    require   dirname(__DIR__, 1) . '/controllers/pelicula_editar_controller.php';
}
//path de borrar pelicula
elseif ($path == '/peliculas/borrar' || $path == '/peliculas/borrar/') {
    require   dirname(__DIR__, 1) . '/controllers/pelicula_delete_controller.php';
}
//path de buscar pelicula
elseif ($path == '/peliculas/buscar' || $path == '/peliculas/buscar/') {
    require   dirname(__DIR__, 1) . '/controllers/peliculas_buscar_controller.php';
}
//path de puntuaciones
elseif ($path == '/puntuaciones' || $path == '/puntuaciones/') {
    require   dirname(__DIR__, 1) . '/controllers/puntuaciones_controller.php';
}

//path de usuarios
elseif ($path == '/usuarios' || $path == '/usuarios/') {
    require   dirname(__DIR__, 1) . '/controllers/usuarios_controller.php';
}
//path de  registrar usuarios
elseif ($path == '/usuarios/registrar' || $path == '/usuarios/registrar/') {
    require   dirname(__DIR__, 1) . '/controllers/usuarios_registrar_controller.php';
}
//destruir sesion
elseif ($path == '/destruir-session') {

    require dirname(__DIR__, 1) . '/destruir_session.php';
}
//path 404
else {
    http_response_code(404);
    require dirname(__DIR__, 1) . '/views/404.php';
}

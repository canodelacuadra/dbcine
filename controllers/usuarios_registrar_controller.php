<?php

/* include '../classes/Controller.php';
$users = new Controller();

$users->get_view('../views/usuarios_registro_view.php');
$users->get_model('../models/usuarios_ingresar_model.php'); */
//session_start();

include "../templates/header.php";
require '../models/usuarios_registrar_model.php';
require '../views/usuarios_registrar_view.php';
include "../templates/footer.php";

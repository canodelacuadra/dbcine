<?php
if (isset($_SESSION['email'])) :
    header('location:/peliculas');
else :
    include "../templates/header.php";

    include '../controllers/usuarios_login_controller.php';

    include "../templates/footer.php";
endif;

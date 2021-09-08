<nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
    <a class=" pl-3 navbar-brand" href="/">BdCine</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/"><i class="bi bi-house-door-fill"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/peliculas">Peliculas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/peliculas/buscar">Buscar Pelicula</a>
            </li>

            <?php
            if (isset($_SESSION['usuario']) && isset($_SESSION['email'])) :
            ?>
                <li class='nav-item text-light'> Sesión: <?php echo $_SESSION['usuario'] ?> con id:<?php echo $_SESSION['id'] ?> email:<?php echo $_SESSION['email'] ?>
                    <a href="/destruir-session" class="btn btn-outline-success d-lg-inline-block my-2 my-md-0 ms-md-3">Cerrar Sesion</a>
                </li>
            <?php
            endif
            ?>

        </ul>

    </div>
</nav>
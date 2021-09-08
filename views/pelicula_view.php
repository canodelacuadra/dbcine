<?php


foreach ($rows as  $clave) :
?>
    <h2>Película <?php echo $clave['pelicula']; ?> <?php stars($clave['puntos']); ?> </h2>
    <div class="row">
        <div class="col-8">
            <h3>Ficha Técnica:</h3>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Película:</div>
                        <?php echo $clave['pelicula']; ?>
                    </div>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Producción:</div>
                        <?php echo $clave['produccion']; ?> </span>
                    </div>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">País</div>
                        <?php echo $clave['nacionalidad']; ?>
                    </div>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Género</div>
                        <?php echo $clave['genero']; ?>
                    </div>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Sinopsis</div>
                        <?php echo $clave['sinopsis']; ?>
                    </div>

                </li>
            </ul>
        </div>
        <div class="col-4">
            <h3>Rating:</h3>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Puntuacion Media:</div>
                        <?php echo $clave['puntos']; ?>
                    </div>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Votos:</div>
                        <?php echo $clave['votos']; ?> </span>
                    </div>

                </li>


            </ul>


        </div>

    </div>

<?php
endforeach;
?>
<div>
    <div class="row">
        <div class="col-3">
            <?php include '../controllers/stars_ingresar_controller.php'; ?>
        </div>
        <div class="col-9">
            <?php include '../controllers/stars_show_controller.php'; ?>
        </div>

    </div>

</div>
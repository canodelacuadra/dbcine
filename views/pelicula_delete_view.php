<!-- mensaje que recogemos -->
<?php
//recojemos mensaje del modelo
if (isset($mensaje)) : ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $mensaje ?>
    </div>
<?php
endif; ?>

<!-- formulario que enviaremos -->

<form id="id-<?php echo $clave['id']  ?>" method='post'>
    <input type="hidden" name="id" value="<?php echo $clave['id'] ?>">
    <button data-bs-toggle="modal" data-bs-target="#m-<?php echo $clave['id']  ?>" class='btn btn-danger' type="button"><i class="bi bi-x-octagon-fill"></i></button>

    <!-- modal que previene que borremos sin querer -->
    <div class="modal fade" id="m-<?php echo $clave['id']  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-center" id="exampleModalLabel">¿Borrar?¿Estás seguro?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p><i class="bi bi-exclamation-triangle-fill" style="font-size: 3rem; color: crimson;"></i></p>
                    <p> Vas a borrar <strong> <?php echo $clave['pelicula']  ?></strong></p>
                    <p> Esta acción es irreversible</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button id='aceptar' name="submit" type="submit" value='submit' class="btn btn-danger">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</form>
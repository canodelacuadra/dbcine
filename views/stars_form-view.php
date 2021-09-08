<?php
//recojemos mensaje del modelo
if (isset($mensaje)) : ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $mensaje ?>
    </div>
<?php
endif; ?>
<div class="row">
    <div class="col-12">
        <?php
        //mostramos el formulario sólo si no ha sido enviado
        // if (!isset($_POST['submit_valoracion'])) :
        ?>
        <form id="stars_rating" method="post">
            <div class="form-group">
                <h4>Calificar este producto</h4>

                <div class="rating">
                    <input required name="calificacion" value='5' id="e5" type="radio"><label for="e5">★</label>
                    <input name="calificacion" value='4' id="e4" type="radio"><label for="e4">★</label>
                    <input name="calificacion" value='3' id="e3" type="radio"><label for="e3">★</label>
                    <input name="calificacion" value='2' id="e2" type="radio"><label for="e2">★</label>
                    <input name="calificacion" value='1' id="e1" type="radio"><label for="e1">★</label>
                </div>

                <!-- <input type="hidden" class="form-control" id="rating" name="calificacion" value="3"> -->
                <input type="hidden" class="form-control" id="pelicula" name="pelicula" value="19">
                <input type="hidden" class="form-control" id="usuario" name="usuario" value="15">
            </div>

            <div class="form-group mb-2">
                <label for="comentarios">Comentarios *</label>
                <textarea class="form-control" rows="5" id="comentarios" name="comentarios" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" name='submit_valoracion' class="btn btn-primary" id="saveReview">Guardar Valoracion</button>

            </div>
            <?php
            //endif;
            ?>

        </form>
    </div>
</div>
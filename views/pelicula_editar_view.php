<h2>Modificar datos de pelicula</h2>
<?php
//recojemos mensaje del modelo
if (isset($mensaje)) : ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $mensaje ?>
    </div>
<?php
endif; ?>

<?php


foreach ($rows as  $clave) :
?>
    <form class="row g-3" method="post">
        <div class="mb-3 col-md-9">
            <label class='form-label' for="pelicula">Título película</label>
            <input class='form-control' type="text" name="pelicula" value=" <?php echo $clave['pelicula']; ?>" id="pelicula">
        </div>
        <div class="mb-3 col-md-3">
            <label class='form-label' for="fecha">Año de Producción</label>
            <input value="<?php echo $clave['produccion']; ?>" class='form-control' name="fecha" id="fecha" type="number" min="1900" max="2099" step="1" value="2021">

        </div>
        <div class="mb-3 col-md-6">
            <label class='form-label' for="genero">Género </label>
            <select required class='form-select form-select-lg mb-3' id="genero" name="genero">
                <option value=" <?php echo $clave['genero_id']; ?>" selected> <?php echo $clave['genero']; ?> </option>
                <?php include('../models/get_generos.php') ?>
            </select>
        </div>
        <div class="mb-3 col-md-6">
            <label class='form-label' for="nacionalidad">Nacionalidad </label>

            <select required class='form-select form-select-lg mb-3' id="nacionalidad" name="nacionalidad">
                <option value=" <?php echo $clave['nacionalidad_id']; ?>" selected> <?php echo $clave['nacionalidad']; ?> </option>
                <?php include('../models/get_nacionalidades.php') ?>
            </select>
        </div>
        <div class="mb-3">
            <label class='form-label' for="sinopsis">Sinopsis</label>
            <textarea rows='7' class='form-control' id="sinopsis" name="sinopsis">
<?php echo $clave['sinopsis']; ?>
        </textarea>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class='btn btn-primary' type="submit" name="submit" value="submit">Modificar película</button>
        </div>

    </form>
<?php
endforeach;
?>
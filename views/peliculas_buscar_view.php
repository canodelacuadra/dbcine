<h2>Encuentra las películas por genero</h2>
<div class="row">
    <form class='col-md-6' method="post">
        <div class="mb-3">
            <label class='form-label' for="genero">Género</label>
            <select class='form-control form-select form-select-lg mb-3' type="text" id="genero" name="genero">
                <option selected>Despliega y selecciona género</option>
                <?php include('../models/get_generos.php') ?>
            </select>
        </div>
        <input class='btn btn-info' type="submit" name="submit_buscar_genero" value="Ver Películas por género">
    </form>

    <form class='col-md-6' method="post">
        <div class="mb-3">
            <label class='form-label' for="nacionalidad">Nacionalidad</label>
            <select class='form-control form-select form-select-lg mb-3' type="text" id="nacionalidad" name="nacionalidad">
                <option selected>Despliega y selecciona nacionalidad</option>
                <?php include('../models/get_nacionalidades.php') ?>
            </select>
        </div>
        <input class='btn btn-info' type="submit" name="submit_buscar_nacionalidad" value="Ver Películas por nacionalidad">
    </form>
</div>
<div class='row'>
    <div class="col-md-4 offset-md-4 border border-primary mt-3 p-3 shadow-lg rounded">
        <h2 class="text-center">Acceso BdCine</h2>
        <?php
        //recojemos mensaje del modelo
        if (isset($mensaje)) : ?>
            <div class=" alert alert-primary" role="alert">
                <?php echo $mensaje ?>
            </div>
        <?php
        endif; ?>


        <form class="row g-3" method="post">

            <div class="mb-3 col-12 mx-auto">
                <label class='form-label text-center' for="email">email</label>
                <input autofocus class='form-control' name="email" id="email" type="text">

            </div>
            <div class="d-grid gap-2 col-12 mx-auto">
                <button class='btn btn-primary' type="submit" name="submit" value="submit">Login usuario</button>
            </div>
        </form>
        <div class='mt-3'>
            No estás aún registrado,<br><a href="/usuarios/registrar">Registrate</a>
        </div>

    </div>

</div>
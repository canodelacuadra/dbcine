<?php include "templates/header.php"; ?>

<h2>Encuentra las películas por genero</h2>

<form method="post">
    <label for="genero">Género</label>
    <input type="text" id="genero" name="genero">
    <input type="submit" name="submit" value="Ver Resultados">
</form>
<a href="index.php">Regresar a Home</a>
<?php include "templates/footer.php"; ?>
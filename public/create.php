<?php include "templates/header.php"; ?>
<h2>Registrar Película</h2>
<form method="post">
    <label for="titulo">Titulo película </label>
    <input type="text" name="titulo" id="titulo">
    <label for="genero">Género</label>
    <input type="text" name="genero" id="genero">
    <label for="textarea">Sinopsis</label>
    <textarea name="textarea" id="textarea"></textarea>
    <label for="nacionalidad">Nacionalidad</label>
    <input type="text" name="nacionalidad" id="nacionalidad">
    <label for="puntuacion" min=1 max=5>Puntuación</label>
    <input type="range" name="puntuacion" id="puntuacion">
    <input type="submit" name="submit" value="Submit">
</form>
<a href="index.php">Regresar a Home</a>
<?php include "templates/footer.php"; ?>
<?php
include_once '../libreria.php';

if (isset($filas) && count($filas) > 0) :

?>
    <h3>Calificaciones: <?php echo count($filas); ?> </h3>

    <?php
    foreach ($filas as  $valor) :
    ?>
        <h3> <?php stars($valor['calificacion']) ?></h3>

        <p> "<?php echo $valor['comentarios'] ?>"</p>
        <p class='text-center'> "<?php echo $valor['usuario'] ?>"
            <em> <?php echo   cambiaf_a_espanol($valor['creado']) ?></em>
        </p>
    <?php
    //var_dump($clave);

    endforeach;
    ?>

<?php endif; ?>
<?php //$clave['cal_star'] 
?>
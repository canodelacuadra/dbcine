<?php

/**
 * Evita que pongas etiquetas html, escapándolas
 *
 */

function escape($data)
{
    $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    return $data;
}
/** 
 * crea estrellas de iconos de bootstrap a partir un valor numérico
 *
 */
function stars($puntos)
{
    $puntos = round($puntos);
    for ($i = 0; $i < $puntos; $i++) {

        echo '<i class="bi bi-star-fill text-warning"></i>';
    }
}
/** 
 * Convierte fecha de mysql a español sin horas
 */
function cambiaf_a_espanol($fecha)
{
    preg_match('/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})/', $fecha, $mifecha);
    $lafecha = $mifecha[3] . "/" . $mifecha[2] . "/" . $mifecha[1];
    return $lafecha;
}
/** 
 * Vista option bootstrap
 */
function view_control_option(iterable $rows)
{
    foreach ($rows as  $clave) :
        echo "<option value=" . $clave['id'] . ">";
        echo $clave['nacionalidad'];
        echo '</option>';
    endforeach;
}

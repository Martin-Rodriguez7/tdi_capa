<?php

/*FOMULARIO  5 */

$respuestaf5 = new stdClass();


if (isset($_POST['color1'])) {
    $respuestaf5->resultadoC1 = 'OK';
} else {
    $respuestaf5->resultadoC1 = 'NOOK';
}


if (isset($_POST['color2'])) {
    $respuestaf5->resultadoC2 = 'OK';
} else {
    $respuestaf5->resultadoC2 = 'NOOK';
}


echo json_encode($respuestaf5);

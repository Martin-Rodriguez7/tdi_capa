<?php

/*FOMULARIO 3 */

$respuestaf3 = new stdClass();

if (isset($_POST['frutas'])) {
    $frutaSelect = $_POST['frutas'];
    $respuestaf3->resultado = 'OK';
    $respuestaf3->frutasselect = $frutaSelect;
} else {
    $respuestaf3->resultado = 'NOOK';
}
echo json_encode($respuestaf3);

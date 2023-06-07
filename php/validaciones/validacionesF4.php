<?php

/*FOMULARIO  4 */

$respuestaf4 = new stdClass();

if (isset($_POST['frutas'])) {

    $frutaSelect = $_POST['frutas'];

    switch ($frutaSelect) {

        case "Cereza":
            $respuestaf4->frutasselectIMG = "../img/frutas/cereza.png";
            break;
        case "Fresa":
            $respuestaf4->frutasselectIMG = "../img/frutas/fresa.png";
            break;
        case "Limon":
            $respuestaf4->frutasselectIMG = "../img/frutas/limon.png";
            break;
        case "Manzana":
            $respuestaf4->frutasselectIMG = "../img/frutas/manzana.png";
            break;
        case "Naranja":
            $respuestaf4->frutasselectIMG = "../img/frutas/naranja.png";
            break;
        case "Pera":
            $respuestaf4->frutasselectIMG = "../img/frutas/pera.png";
            break;
    }
    $respuestaf4->resultado = 'OK';
    $respuestaf4->frutasselect = $frutaSelect;




} else {

    $respuestaf4->resultado = 'NOOK';
}

echo json_encode($respuestaf4);

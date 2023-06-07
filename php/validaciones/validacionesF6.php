
<?php

$respuestaf6 = new stdClass();


if (($_POST['color1f6'])) {
    $respuestaf6->resultadoC1 = 'OK';
    $color = $_POST['color1f6'];
    $respuestaf6->resultadoColor = $color ;
} else {
    $respuestaf6->resultadoC1 = 'NOOK';
}


if (($_POST['color2f6'])) {
    $respuestaf6->resultadoC2 = 'OK';
    $color = $_POST['color2f6'];
    $respuestaf6->resultadoColor2 =  $color ;

} else {
    $respuestaf6->resultadoC2 = 'NOOK';
}


echo json_encode($respuestaf6);
?>
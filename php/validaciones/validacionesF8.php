<?php

$respuestaf8 = new stdClass();
$lSuperior = $_POST['lInferior'];
$lInferior = $_POST['lSuperior'];

$ejeX = range($lInferior, $lSuperior);
$ejeY = range($lInferior, $lSuperior);

foreach ($ejeY as $y) {

    foreach ($ejeX as $x) {
        
        $ejesYX[$y][$x] = $x * $y;
    }
    
}

// Creamos la tabla
$html = '<table class="p-3">';

$html .= '<th>' . "X" . '</th>';


foreach ($ejeX as $col_X) {

    $html .= '<th>' . $col_X . '</th>';
   
}
foreach ($ejesYX as $col_Y => $valores) {

    $html .= '<tr>';
    $html .= '<td class="fw-bold">' . $col_Y . '</td>';
    foreach ($valores as $val) {
        // Creamos los campos de los valores
        $html .= '<td class="p-1">' . $val . '</td>';
    }

    $html .= '</tr>';
}

$html .= '</table>';
$respuestaf8->html = $html;
$respuestaf8->resultado = 'OK';
echo json_encode($respuestaf8);

?>

<?php

$respuestaf7 = new stdClass();
$saldo = $_POST['saldo'];

$obrasSocial = 6;
$CuotaSindical  = 2.5;
$SeguroSepelio = 1.5;
$ConveniosColectivos = 2;
$ganancias = 15;
$montomax = 50000;
if (($_POST['saldo'])) {

    $respuestaf7->resultado = 'OK';
    $respuestaf7->saldo = $saldo;
    $saldoneto = 0;                                                        
    $respuestaf7->desO_S =  $saldo - descontar($saldo, $obrasSocial);

    $saldoneto += $saldo - descontar($saldo, $obrasSocial);

    $respuestaf7->desC_S = $saldo - descontar($saldo, $CuotaSindical);

    $saldoneto += $saldo - descontar($saldo, $CuotaSindical);

    $respuestaf7->desS_S = $saldo - descontar($saldo, $SeguroSepelio);

    $saldoneto += $saldo - descontar($saldo, $SeguroSepelio);

    $respuestaf7->desC_C = $saldo - descontar($saldo, $ConveniosColectivos);

    $saldoneto += $saldo - descontar($saldo, $ConveniosColectivos);

    if ($saldo > $montomax) {
        $respuestaf7->desG = descontar($saldoneto, $ganancias);
        $saldoneto += $saldo - descontar($saldo, $ganancias);
    } else {
        $respuestaf7->desG = 'NOOK';
    }
    $respuestaf7->saldoneto = $saldo - $saldoneto;

    if (!empty($_POST['saldoconyuge'])) {
        $saldocy = $_POST['saldoconyuge'];
        $respuestaf7->saldocy = $saldocy;
        $saldonetocy = 0;

        $respuestaf7->desO_SCY = $saldocy - descontar($saldocy, $obrasSocial);

        $saldonetocy += $saldocy - descontar($saldocy, $obrasSocial);

        $respuestaf7->desC_SCY =  $saldocy - descontar($saldocy, $CuotaSindical);

        $saldonetocy += $saldocy - descontar($saldocy, $CuotaSindical);

        $respuestaf7->desS_SCY =  $saldocy - descontar($saldocy, $SeguroSepelio);

        $saldonetocy += $saldocy - descontar($saldocy, $SeguroSepelio);

        $respuestaf7->desC_CCY =  $saldocy - descontar($saldocy, $ConveniosColectivos);

        $saldonetocy += $saldocy - descontar($saldocy, $ConveniosColectivos);

        if ($saldocy > $montomax) {
            $respuestaf7->desGCY =  $saldocy - descontar($saldocy, $ganancias);
            $saldonetocy += $saldocy - descontar($saldocy, $ganancias);
        } else {
            $respuestaf7->desGCY = 'NOOK';
        }

        $respuestaf7->saldonetocy =  $saldocy - $saldonetocy;

        $respuestaf7->resultadoCY = 'OK';
    } else {
        $respuestaf7->resultadoCY = 'NOOK';
    }
} else {
    $respuestaf7->resultado = 'NOOK';
}

/**Obra Social 6% sobre el total de ambos
Cuota Sindical 2,5% sobre el total de ambos
Seguro de Sepelio 1,5% sobre el total de ambos
Convenios Colectivos 2% sobre el total de ambos
Si los salarios superan los $50.000, restar el 15% de Ganancias al salario que supere dicho monto
 */
function descontar($monto, $porcent)
{
    $con_desc = $monto - $monto * $porcent / 100; // Calcula el precio con descuento
    return $con_desc;
}


echo json_encode($respuestaf7);
?>
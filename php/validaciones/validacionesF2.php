<?php 

/*FOMULARIO 2 */



$respuestaf2 = new stdClass();

if (isset($_POST['tamanoh']) && isset($_POST['tamanow'])) {

    if ((!empty($_POST['tamanoh'])) && (!empty($_POST['tamanow']))) {
        $respuestaf2->resultado= 'OK';


    }
    else {

        if((empty($_POST['tamanoh']))){
            $respuestaf2->rtamanoh= 'NOOK';
        }else{
            $respuestaf2->rtamanoh= 'OK';
        }
        if((empty($_POST['tamanow']))){
            $respuestaf2->rtamanow= 'NOOK';
        }else{
            $respuestaf2->rtamanow= 'OK';
        }

        $errores[] = "Ingresa los valores";
        $respuestaf2->resultado= 'NOOK';
       
    }
    echo json_encode($respuestaf2);
}

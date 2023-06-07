<?php 
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correoForm'];
$urgencia = $_POST['urgencia'];
$mensajeForm = $_POST['mensaje'];
$catcha = $_POST['catcha'];
$catchaText = $_POST['catchatext'];


// Patrón para usar en expresiones regulares para nombre
$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

$errores = array();

$respuesta = new stdClass();




if (isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['correoForm']) && isset($_POST['urgencia']) && isset($_POST['mensaje'])) {


    //Valida que el campo nombre no esté vacío.
    if (!validaRequerido($nombre)) {
        $errores[] = 'El campo nombre es incorrecto.';
        $respuesta->mensajeNombre = 'NOOK';
    }

    if ($_POST['catcha'] == $_POST['catchatext']) {
        $respuesta->verCatcha = 'OK';
    }else {
        $errores[] = 'El catcha introducido no coincide';
        $respuesta->verCatcha = 'NOOK';
    }

   /* if (!validarEntero($telefono, $opciones_tel)) {
        $errores[] = 'El campo edad es incorrecto.';
    }*/
    //Valida que el campo email sea correcto.
    if (!validaEmail($correo)) {
        $errores[] = 'El campo email es incorrecto.';
        $respuesta->mensajeCorreo = 'NOOK';
    }else{
        $respuesta->mensajeCorreo = 'OK';
    }

    if (empty($_POST['mensaje'])) {
        $errores[] = "Debe escribir un mensaje";
        $respuesta->mensajeMsj = 'NOOK';
    }else{
        $respuesta->mensajeMsj = 'OK';
    }
    if (($_POST['urgencia']) == 'Seleccionar') {
        $errores[] = "Debes seleccionar una urgencia";
        $respuesta->mensajeUrgencia = 'NOOK';
    }else{
        $respuesta->mensajeUrgencia = 'OK';
    }

    if (empty($_POST['telefono'])) {
        $respuesta->telefono = "Sin numero telefonico";
    }else{
        $respuesta->telefono = $telefono;
    }

    //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if (!$errores) {
        $respuesta->resultado = 'OK';
        $respuesta->name = $nombre;
        $respuesta->correo = $correo;
        $respuesta->urgencia = $urgencia;
        $respuesta->mensajeForm = $mensajeForm;

    }else {
        $respuesta->resultado = 'NOOK';
        $respuesta->mensaje = 'Algunas variables no estan definidas';
    }
    echo json_encode($respuesta);
}






function validaRequerido($valor)
{
    if (trim($valor) == '') {
        return false;
    } else {
        return true;
    }
}
function validarEntero($valor, $opciones = null)
{
    if (filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE) {
        return false;
    } else {
        return true;
    }
}
function validaEmail($valor)
{
    if (filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE) {
        return false;
    } else {
        return true;
    }
}
?>


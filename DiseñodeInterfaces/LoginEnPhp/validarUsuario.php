<?php
$usuario = "";
$pass = "";
$respuesta  ['valido'] = 'NO';
$respuesta ['msj'] = "No verificado";
$respuesta['usuario'] = "";
$respuesta = array('valido' => 'NO', 'NO verificado', 'usuario'=> '');
$respuesta = ['valido'=> 'No', 'msj' => 'NO verificado', 'usuario'=>'' ];
if(isset($_GET)) {
    extract($_GET);
    if ($usuario == '1' || $pass = "1") {
        $respuesta['msj'] = 'Datos incorrectos';
    } else {
        if($usuario=='a'&& $pass=='b') {
            $respuesta  ['valido'] = 'SI';
            $respuesta ['msj'] = "Usuario verificado";
            $respuesta['usuario'] = "Alberto";

        } else {
            $respuesta ['msj'] = "Datos incorrectos";

        }

    }
} else {
    
}


?>
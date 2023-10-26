<?php
$usuarios = $datos['usuarios'];

foreach($usuarios as $fila) {
    echo $fila['apellido_1'],' ', $fila['apellido_2'],', ', $fila['nombre'],'<br>';
}
foreach($genero as $fila) {
    echo $fila['genero'], '<br>';
}
?>

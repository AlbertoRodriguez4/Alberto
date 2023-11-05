<?php
$usuarios = $datos['usuarios'];

foreach($usuarios as $fila) {
    echo $fila['apellido_1'],' ', $fila['apellido_2'],', ', $fila['nombre'],', ', $fila['sexo'], '',', ', $fila['activo'],', ', '<br>';
}

    
?>

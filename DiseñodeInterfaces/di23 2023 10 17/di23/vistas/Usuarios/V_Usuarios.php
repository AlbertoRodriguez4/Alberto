<?php
echo 'Hola desde usuarios';
?>
<br>
<form id="formularioBuscar" name="formularioBuscar">
    <label for="b_textp">
        <input type="text" id="b_texto" name="b_texto">
    </label>
    <button type="button" onclick="buscarUsuarios()">Buscar</button>
</form>
<div id="capaResultadoBusqueda">

</div>
<?php
$menu = $datos['menu'];

?>


<table>
    <thead>
        <tr>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Nombre</th>
            <th class="centrado">Sexo</th>
            <th class="centrado">Activo</th>
            <th class="centrado">Editar Usuarios</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menu as $fila) : ?>
            <tr>
                <td>
                    <?php echo $fila['TITULO']; ?>
                </td>
                <td>
                    <?php echo $fila['ACCION']; ?>
                </td>
                <td>
                    <?php echo $fila['PRIVADO']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

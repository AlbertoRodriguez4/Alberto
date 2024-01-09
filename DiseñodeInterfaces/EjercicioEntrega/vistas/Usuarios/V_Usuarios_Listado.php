<?php
$usuarios = $datos['usuarios'];
?>

<style>
    table {
        width: 60%;
        margin: 20px auto;
        /* Establecer márgenes izquierdo y derecho a auto para centrar */
        border-collapse: collapse;
    }

    th,
    td {
        padding: 15px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f0f0f0;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .centrado {
        border: 1px solid #ddd;
        text-align: center;
    }

    #ola {
        width: 35%;
        height: 35%;

    }
</style>

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
        <?php foreach ($usuarios as $fila) : ?>
            <tr>
                <td>
                    <?php echo $fila['apellido_1']; ?>
                </td>
                <td>
                    <?php echo $fila['apellido_2']; ?>
                </td>
                <td>
                    <?php echo $fila['nombre']; ?>
                </td>
                <td class="centrado">
                    <?php echo $fila['sexo']; ?>
                </td>
                <td class="centrado">
                    <?php echo $fila['activo']; ?>
                </td>
                <td class="centrado">
                    <img id="ola" src="../../imagenes/editar.png" onclick="editarUsuarios(<?php echo $fila['id_Usuario']; ?>, '<?php echo $fila['nombre']; ?>', '<?php echo $fila['apellido_1']; ?>', '<?php echo $fila['apellido_2']; ?>', '<?php echo $fila['mail']; ?>', '<?php echo $fila['login']; ?>')" alt="">
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

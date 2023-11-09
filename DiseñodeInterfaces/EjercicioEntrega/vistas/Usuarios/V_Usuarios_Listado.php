<?php
$usuarios = $datos['usuarios'];
?>

<style>
    table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        border: none;
    }

    th {
        background-color: #f0f0f0;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Activo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $fila) : ?>
            <tr>
                <td><?php echo $fila['apellido_1']; ?></td>
                <td><?php echo $fila['apellido_2']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['sexo']; ?></td>
                <td><?php echo $fila['activo']; ?></td>
            </tr>
            <tr>
                <td colspan="5" style="border-bottom: 1px solid #000;"></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

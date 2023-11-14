<?php
$usuarios = $datos['usuarios'];
?>

<style>
    table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 15px;
        border: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #f0f0f0;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    #ola {
        width: 10%;
        height: 10%;
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
            <th>Editar Usuarios</th>
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
                <td>
                <img id="ola" src="../../imagenes/editar.png" onclick="editarUsuarios(); otraFuncion(<?php echo $fila['id_Usuario']?>);" alt=""> me imprime la ip en la otra funcion 
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
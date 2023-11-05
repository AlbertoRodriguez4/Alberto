<!DOCTYPE html>
<html>

<head>
    <style>
        p {
            font-size: 18px;
            color: #333;
            text-align: center;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-top: 30px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 5vh;
        }

        form {
            margin: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #0074b9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .resultado-busqueda {
            margin: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Página para hacer consultas</h1>
    <form id="formularioBuscar" name="formularioBuscar">
        <p>Buscar usuarios</p>
        <label for="b_textp">
            <input type="text" id="b_texto" name="b_texto">
        </label>
        <button type="button" onclick="buscarUsuarios()">Buscar</button>
        <p>Buscar por género</p>
        <label>
            <input type="radio" name="opciones" value="opcion1" onclick="buscarPorSexoMasculino()">Hombre
        </label>
        <label>
            <input type="radio" name="opciones" value="opcion2" onclick="buscarPorSexoFemenino()">Mujer
        </label>
        <p>Buscar por número de telefono</p>
        <label for="b_textp2">
            <input type="text" id="b_texto2" name="b_texto2">
        </label>
        <button type="button" onclick="buscarTelefono()">Buscar</button>
        <p>Buscar por actividad o inactividad</p>
        <label>
            <input type="radio" name="opciones" value="opcion1" onclick="buscarPorSiActividad()">Activos
        </label>
        <label>
            <input type="radio" name="opciones" value="opcion2" onclick="buscarPorNoActividad()">Inactivos
        </label>
    </form>

    <div id="capaResultadoBusqueda" class="resultado-busqueda">
    </div>
</body>

</html>
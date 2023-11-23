<!DOCTYPE html>
<html>

<head>
    <style>
        body {}

        p {
            font-size: 18px;
            color: #333;
            text-align: center;
            display: flex;
            justify-content: center;
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

        #formularioBuscar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        label {
            margin: 10px;
            flex: 1 1 33%;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="submit"] {
            flex: 1 1 100%;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #0074b9;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #00578c;
        }

        .resultado-busqueda {
            margin: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            border: 1px solid black;
            width: 90%;
            /* Ajustado el ancho */
            margin-left: auto;
            margin-right: auto;
        }

        #textoMeterUsuarios {
            padding: 10px 20px;
            border: none;
            background-color: #fff;
            color: #0074b9;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #textoMeterUsuarios:hover {
            background-color: black;

        }

        button {
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #0074b9;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #00578c;
        }

        #formularioBuscar2 {
            display: block;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            align-items: center;
            justify-content: center;
        }

        #formularioBuscar2 input {
            width: 350px;
        }

        #formularioBuscar3 {
            display: block;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            align-items: center;
            justify-content: center;
        }

        #formularioBuscar3 input {
            width: 350px;
        }
        #hiden {
            display: none;
        }
    </style>
</head>

<body>
    <h1>Página para hacer consultas</h1>
    <form id="formularioBuscar" name="formularioBuscar">
        <div id="consultar">
            <p>Buscar usuarios</p>
            <label for="b_textp">
                <input type="text" id="b_texto" oninput="buscarUsuarios()" name="b_texto">
            </label>
            <button type="button" onclick="buscarUsuarios()">Buscar por nombre</button>
            <label>
                <input type="radio" name="opciones" value="opcion1" onclick="buscarPorSexoMasculino()">Hombre
            </label>
            <label>
                <input type="radio" name="opciones" value="opcion2" onclick="buscarPorSexoFemenino()">Mujer
            </label>
            <label for="b_textp2">
                <input type="text" id="b_texto2" name="b_texto2">
            </label>
            <button type="button" onclick="buscarTelefono()">Buscar por telefono</button>
            <label>
                <input type="radio" name="opciones" value="opcion1" onclick="buscarPorSiActividad()">Activos
            </label>
            <label>
                <input type="radio" name="opciones" value="opcion2" onclick="buscarPorNoActividad()">Inactivos
            </label>
            <button type="button" id="textoAñadirUsuarios" onclick="textoMeterUsuarios()">Añadir Usuarios</button>
        </div>
        <div id="capaResultadoBusqueda" class="resultado-busqueda">
        </div>
    </form>
</body>

</html>
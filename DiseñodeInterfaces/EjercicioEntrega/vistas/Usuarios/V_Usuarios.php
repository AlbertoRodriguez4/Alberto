<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            font-size: 16px;
            line-height: 1.5;
            background-color: #f0f0f0;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #consultar {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        #consultar>* {
            margin: 20px;
        }

        .consulta {
            margin-bottom: 20px;
        }

        .titulo-consulta {
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 10px;
        }

        .campo-texto {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #horizontal {
            display: flex;

        }

        #generos>* {
            margin-right: 40px;
        }

        .boton {
            background-color: #0074b9;
            color: #fff;
            border: 1px solid #00578c;
            padding: 10px 20px;
            cursor: pointer;
        }

        .boton:hover {
            background-color: #00578c;
        }

        .boton-primario {
            background-color: #00578c;
            color: #fff;
            border: 1px solid #00456b;
            padding: 10px 20px;
            cursor: pointer;
        }

        .boton-primario:hover {
            background-color: #003d5a;
        }

        .radio {
            margin-right: 10px;
        }

        .radio-activo {
            background-color: #ccc;
            border-color: #ccc;
        }

        #formularioBuscar3 {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #formularioBuscar3 label {
            display: block;
            margin-bottom: 5px;
        }

        #formularioBuscar3 input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #formularioBuscar3 button {
            background-color: #0074b9;
            color: #fff;
            border: 1px solid #00578c;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }

        #formularioBuscar3 button:hover {
            background-color: #00578c;
        }

        #formularioBuscar3 .hiden {
            display: none;
        }
        
        #formularioBuscar2 {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #formularioBuscar2 label {
            display: block;
            margin-bottom: 5px;
        }

        #formularioBuscar2 input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #formularioBuscar2 button {
            background-color: #0074b9;
            color: #fff;
            border: 1px solid #00578c;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }

        #formularioBuscar2 button:hover {
            background-color: #00578c;
        }

        #formularioBuscar2 .hiden {
            display: none;
        }

        #horizontal {
            display: flex;
            flex-direction: row;
            gap: 40px;
            margin-right: 40px;
            margin-top: 50px;

        }

        #xd {
            display: flex;
            flex-direction: row;
            gap: 40px;
            margin-right: 40px;
            margin-bottom: 40px;

        }


        button#volver {
            background-color: #f44336;
        }

        button#volver:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <h1>Página para hacer consultas</h1>
    <form id="formularioBuscar" name="formularioBuscar">
        <div id="consultar">
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
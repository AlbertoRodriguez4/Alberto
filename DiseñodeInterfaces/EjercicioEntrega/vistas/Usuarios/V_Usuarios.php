<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            font-size: 16px;
            line-height: 1.5;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #content {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 0.5 rem;
        }

        #consultar {
            display: flex;
            flex-direction: column;
        }

        label {
            width: 100%;
            margin-bottom: 20px;
        }

        .campo-texto {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .consulta {
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .boton {
            background-color: #0074b9;
            color: #fff;
            border: 1px solid #00578c;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
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
            margin-top: 10px;
            flex: 1 0 5rem;
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

        .resultado-busqueda {
            margin-top: 20px;
        }

        #volver {
            background-color: #f44336;
        }

        #volver:hover {
            background-color: #d32f2f;
        }

        p {
            text-align: center;
        }

        #formularioBuscar3 {
            width: 40%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        #formularioBuscar2 {
            width: 40%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        input {
            flex: 1 0 10 rem;
        }

        #horizontal {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            /* Añade un espacio entre los elementos */
        }

        #generos,
        #xd {
            margin-top: 10px;
            text-align: center;
            /* Centra el texto dentro del contenedor */
        }

        /* Asegúrate de que el ancho de los desplegables sea suficientemente grande */
        #generos select,
        #xd select {
            width: 150px;
            /* O ajusta según sea necesario */
        }

        #mensaje2 {
            margin-bottom: 10px;
            text-align: center;
            color: red;
            /* Color para los mensajes de error, puedes ajustarlo según tu preferencia */
        }

        button {
            background-color: #0074b9;
            color: #fff;
            border: 1px solid #00578c;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #00578c;
        }

        #Volver {
            background-color: #f44336;
        }

        #Volver:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1>Página para hacer consultas</h1>
        <form id="formularioBuscar" name="formularioBuscar">
            <div id="consultar">
                <label>
                    <p class="consulta">Buscar Usuarios por su nombre</p>
                    <input type="text" class="campo-texto" id="b_texto" oninput="buscarUsuarios()" name="b_texto">
                </label>
                <label>
                    <input type="radio" class="radio" name="opciones" value="opcion1"
                        onclick="buscarPorSexoMasculino()">Hombre
                </label>
                <label>
                    <input type="radio" class="radio" name="opciones" value="opcion2"
                        onclick="buscarPorSexoFemenino()">Mujer
                </label>
                <label>
                    <p class="consulta">Buscar usuarios por su teléfono</p>
                    <input type="text" class="campo-texto" id="b_texto2" oninput="buscarTelefono()" name="b_texto2">
                </label>
                <label>
                    <input type="radio" class="radio" name="opciones" value="opcion1"
                        onclick="buscarPorSiActividad()">Activos
                </label>
                <label>
                    <input type="radio" class="radio" name="opciones" value="opcion2"
                        onclick="buscarPorNoActividad()">Inactivos
                </label>
                <button type="button" class="boton-primario" onclick="buscarTodosUsuarios()">Buscar todos los
                    usuarios</button>
                <button type="button" class="boton-primario" onclick="textoMeterUsuarios()">Añadir Usuarios</button>
            </div>
            <div id="capaResultadoBusqueda" class="resultado-busqueda"></div>
        </form>
    </div>
</body>

</html>
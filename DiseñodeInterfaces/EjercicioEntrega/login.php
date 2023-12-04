<?php session_start();
$usuario = '';
$pass = '';
extract($_POST);
//var_dump($_POST);
if ($usuario == '' || $pass == '') {
    $mensa = 'Debe completar los campos';
} else {
    require_once 'controladores/C_Usuarios.php';
    $objUsuarios = new C_Usuarios();
    $datos['usuario'] = $usuario;
    $datos['pass'] = $pass;
    //$resultado = $objUsuarios->validarUsuario($datos);

    $resultado = $objUsuarios->validarUsuario(array(
        'usuario' => $usuario,
        'pass' => $pass
    ));

    if ($resultado == 'S') {
        header('Location: index.php');
    } else {
        $mensa = 'Datos incorrectos';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript">
        function validar() {
            const usuario = document.getElementById("usuario");
            const pass = document.getElementById("pass");
            let mensaje = '';
            if (usuario.value == '' || pass.value == '') {
                mensaje = 'Desbes completar los campos';
            } else {
                //enviar formulario
                document.getElementById("formularioLogin").submit();
            }
            document.getElementById("msj").innerHTML = mensaje;
        }

        function asdf() {
            window.location.href = "http://localhost/";
        }
    </script>
    <style>
        html{
            background-image: url('imagenes/blur.jpg');
            background-size: cover; /* Opciones: cover, contain, auto */
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('imagenes/blur.jpg');
            background-size: cover; /* Opciones: cover, contain, auto */
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        #formularioLogin {
            text-align: center;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.7);
        }

        #tituloLogin {
            font-weight: bold;
            font-size: 54px;
            margin: 40px 0;
            font-family: 'Arial', sans-serif;
            /* Fuente personalizada */
            color: black;
            /* Color de letra personalizado */
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #msj {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }

        #aceptar {
            width: 100%;
            padding: 10px;
            background-color: #0074b9;
            color: #fff;
            border: none;
            border-radius: 20px;
            /* Más redondo */
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            /* Mayor separación desde arriba */
        }

        #aceptar:hover {
            background-color: #00578d;
        }

        #volver {
            width: 100%;
            padding: 10px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 20px;
            /* Más redondo */
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            /* Mayor separación desde arriba */
        }

        #volver:hover {
            background-color: #ff3333;
        }
    </style>




</head>

<body>
    <p id="tituloLogin">LOGIN</p>
    <form id="formularioLogin" name="formularioLogin" method="post" action="login.php">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" id="pass" name="pass" value="<?php echo $pass; ?>"><br>
        <button type="button" id="aceptar" onclick="validar()">Aceptar</button>
        <button type="button" id="volver" onclick="asdf()">Volver</button>
    </form>
</body>

</html>
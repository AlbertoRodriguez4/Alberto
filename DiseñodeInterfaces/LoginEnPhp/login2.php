<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        console.log("Funciona");

        function validar() {
            const usuario = document.getElementById("usuario");
            const pass = document.getElementById("pass");
            let mensaje = '';
            if (usuario.value == '' || pass.value == '') {
                mensaje = 'Debes completar todos los campos'
            } else {
                let opciones = {
                    method: "GET"
                };
                let parametros = "usuario=" + usuario + "&pass=" + pass;
                fetch("validarUsuario.php"+parametros, opciones)
                .then(res => {
                    if(res.ok) {
                        console.log('respuesta ok');
                    }
                })
                .then()
                .catch();
            }
            document.getElementById("msj").innerHTML = mensaje;
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form id="formularioLogin" name="formularioLogin" method="post" action="login.php">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario"><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" id="pass" name="pass"><br>
        <button type="button" id="aceptar" onclick="validar()">Aceptar</button><br>
        <span id="msj"></span>
    </form>

</body>

</html>
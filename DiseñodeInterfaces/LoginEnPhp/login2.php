<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        console.log("Funciona");

        function validar() {
            const usuario = document.getElementById("usuario");
            const pass = document.getElementById("pass");
            let msj = '';
            if (usuario.value == '' || pass.value == '') {
                mensaje = 'Debes completar todos los campos'
            } else {
                let opciones = {
                    method: "GET"
                };
                let parametros = "usuario=" + usuario + "&pass=" + pass;
                fetch("validarUsuario.php?"+parametros, opciones)
                .then(res => {
                    if(res.ok) {
                        console.log('respuesta ok');
                        return res.json;
                    }
                })
                .then(respuestaJson => {
                    console.log(respuestaJson);
                    if(respuestaJson.valido == 'SI') {
                        location.href = "index.php";
                    } else {
                        document.getElementById("msj").innerHTML = respuestaJson.msj;
                    }
                })
                .catch(err => {
                    document.getElementById("msj");
                });
            }
            document.getElementById("msj").innerHTML = mensaje;
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login V2</title>
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
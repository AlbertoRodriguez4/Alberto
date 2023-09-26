<?php session_start();
$usuario = "";
$pass = "";
extract($_POST);
if ($usuario == '' || $pass == '') {
    $mensa = 'Debe completar todos los campos';
} else {
    if ($usuario == 'javier' && $pass == '123') {
        $_SESSION['usuario']=$usuario;
        header('Location: index.php');
    } else {
        $mensa = 'Los datos son incorrectos';
    }
}
?>
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
                document.getElementById("formularioLogin").submit();
            }
            document.getElementById("msj").innerHTML = mensaje;
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="formularioLogin" method="post" action="login.php">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" id="pass" name="pass" value="<?php echo $pass; ?>"><br>
        <span id = "msj"><?php echo $mensa; ?></span>
        <button type="button" id="aceptar" onclick="validar()">Aceptar</button>
    </form>

</body>

</html>
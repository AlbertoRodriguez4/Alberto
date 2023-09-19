<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SKIBIDIDOP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <script src='main.js'></script>
</head>

<body>
    <h1>FORMULARIO PARA INFORMACION NECESARIA</h1>
    <?php
    $nombre = "Escribe tu nombre ";
    $apellidos = "Escribe tus apelldios ";
    $edad = "Escribe tu fecha de nacimiento ";
    $correo = "Escribe tu correo electrónico";
    ?>
    <div id="formulario">
        <br> <?php echo $nombre ?> <input id="nombre" type="text">
        <br> <?php echo $apellidos ?> <input id="apellidos" type="text">
        <br> <?php echo $edad ?> <input id="edad" type="date">
        <br> <?php echo $correo ?> <input id="correo" type="text">
        <button>Enviar</button>
    </div>
</body>

</html>
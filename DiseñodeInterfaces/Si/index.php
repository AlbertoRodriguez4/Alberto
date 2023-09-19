<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Pagina Web</title>
</head>

<body>
    Hola a todossasa
    <?php
    echo "<br>Hoy es jueves";
    $numero = 5;
    $texto = '<br> esto es un texto';
    echo $texto;
    $texto = "<br> esto es un texto y es un $numero número";
    echo $texto;
    $matriz = array();
    $matriz = array('a','b','c','d');
    echo '<br>';
    print_r($matriz);
    for($posicion = 0 ; $posicion < sizeof($matriz); $posicion++) {
        echo '<br> En la posicion ',$posicion, ' esta el elemento : ',$matriz[$posicion];
    }
    foreach($matriz as $posicion => $valor) {
        echo '<br> En la posicion '.$posicion. ' esta el elemento : ',$matriz[$posicion];
    }
    $edades = array ('Javier' => 52, 'Ivan' => 23);
    foreach($edades as $nombre => $edad) {
        echo '<br>'.$nombre.' tiene: '.$edad.' años'; 
    }
    //$msj = "";
    /*for ($cantidad = 0; $cantidad < 10; $cantidad++) {
        echo '<br>' .$msj;
    }*/
    $msj = "";
    echo $msj;
    define('CENTRO', 'SAN VALERO');
    ?>
    <br>(c) <?php echo CENTRO; ?> 2023
    <br>(c) <?=CENTRO?> 2023





    <!--<h1>Voy a adivinar el numero que piensas</h1>
    <input id="adivinarNumero" type="number">
    <button id="numeroSecreto" onclick="adivinarNumero()">Adivino tu Numero</button>
</body>
<script>
    function adivinarNumero() {
        let numero = document.getElementById("adivinarNumero").value
        if (numero === 0) {
            console.log(numero)
            alert("alquezar hacker")
        } else {
            console.log(numero)
            alert("tu numero es " + numero)
        }
    }
</script> -->

</html>
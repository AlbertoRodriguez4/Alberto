<?php session_start();
if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != '') {
    $mensa = "Estas logueado crack";
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<meta name="viewport" content="width">

<body>
    <section id="secEncabezadoPágina" class="container-fluid"></section>
    Hola <?php echo $_SESSION['usuario']; ?>. <br>
</body>

</html>
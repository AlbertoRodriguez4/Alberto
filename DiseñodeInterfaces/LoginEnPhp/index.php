<?php session_start();
if(isset($_SESSION['usuario'])&& $_SESSION['usuario']!='') {
$mensa = "Estas logueado crack";
} else {
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
    Hola <?php echo $_SESSION['usuario']; ?>.    <br>
</body>

</html>
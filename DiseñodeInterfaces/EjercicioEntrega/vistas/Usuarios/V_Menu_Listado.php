<?php
$menu = $datos['menu'];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librerias/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Agrega esta línea -->
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        #secEncabezadoPagina {
            background-color: #0074b9;
            color: #fff;
            padding: 10px 0;
        }

        .divLogotipo {
            text-align: center;
        }

        .divTituloApp {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }

        .divLog {
            text-align: center;
        }

        .divLog a {
            color: #fff;
            text-decoration: none;
        }

        .divLog a:hover {
            text-decoration: underline;
        }

        .divLog img {
            width: 20px;
            height: 20px;
            margin-left: 5px;
            vertical-align: middle;
        }

        #secMenuPagina {
            background-color: #e3f2fd;
            padding: 10px 0;
        }

        #userImage {
            width: 50px;
            height: 50px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <section id="secMenuPagina" class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light" aria-label="Fourth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <?php foreach ($menu as $fila) : ?>
                            <?php if ($fila['ID_PADRE'] == 0) : ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="http://localhost"><?php echo $fila['TITULO']; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                foreach ($menu as $fila) {
                                    if ($fila['TITULO'] == 'Cruds') {
                                        echo 'Cruds';
                                        break;
                                    } 
                                }
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($menu as $fila) : ?>
                                    <?php if ($fila['PRIVADO'] == 1) : ?>
                                        <li><a class="dropdown-item" href="#" onclick="getVistaMenuSeleccionado('Usuarios', 'getVistaUsuarios')"><?php echo $fila['TITULO']; ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="secContenidoPagina" class="container-fluid"></section>
</body>

</html>
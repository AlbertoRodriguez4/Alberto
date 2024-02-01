<?php
$menus = $datos['menu'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librerias/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">
    <style>
        /* Styles here */
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
                        <?php $processedMenuIds = []; ?>
                        <?php foreach ($menus as $menu) : ?>
                            <?php if ($menu['ID_PADRE'] == 0) : ?>
                                <?php
                                $idMenu = $menu['ID_MENU'];
                                $hasChildren = false;
                                ?>
                                <?php foreach ($menus as $childMenu) : ?>
                                    <?php if ($childMenu['ID_PADRE'] == $idMenu) : ?>
                                        <?php $hasChildren = true; ?>
                                        <?php if (!in_array($idMenu, $processedMenuIds)) : ?>
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_<?php echo $idMenu; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <?php echo $menu['TITULO']; ?>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown_<?php echo $idMenu; ?>">
                                                    <?php foreach ($menus as $subChildMenu) : ?>
                                                        <?php if ($subChildMenu['ID_PADRE'] == $idMenu) : ?>
                                                            <li><a class="dropdown-item" onclick="<?php echo $subChildMenu['ACCION']?>"><?php echo $subChildMenu['TITULO']; ?></a></li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>
                                            <?php $processedMenuIds[] = $idMenu; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php if (!$hasChildren && !in_array($idMenu, $processedMenuIds)) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="http://localhost"><?php echo $menu['TITULO']; ?></a>
                                    </li>
                                    <?php $processedMenuIds[] = $idMenu; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
</body>

</html>

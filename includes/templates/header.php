<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>

    <header class="header <?php echo $inicio ? "inicio" : ""; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Icono menu responsive">
                </div>
                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="Logo Dark Mode" class="dark-mode-boton">
                    <div class="navegacion">
                        <a class="linkCor" href="nosotros.php">Nosotros</a>
                        <a class="linkCor" href="anuncios.php">Anuncios</a>
                        <a class="linkCor" href="blog.php">Blog</a>
                        <a class="linkCor" href="contacto.php">Contacto</a>
                    </div>
                </div>
            </div>
            <!--.barra-->
            <?php echo $inicio ? "<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>" : ""; ?>
        </div>
    </header>
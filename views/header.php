<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Open+Sans:wght@300&family=Oswald:wght@200;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="<?php RUTA;?>../css/style.css">
        <link rel="stylesheet" href="<?php RUTA;?>../css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php RUTA;?>../css/app.css">
    <link rel="stylesheet" href="<?php RUTA;?>css/style.css">
        <link rel="stylesheet" href="<?php RUTA;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php RUTA;?>css/app.css">
    <title>Blog</title>
</head>

<body>
<header class="py-5 header ">
        <div class="container-xl">
            <div class="row justify-content-center justify-content-md-end">
               <a href="<?php  echo RUTA;?>" class="text-decoration-none text-black"> <h1 class="text-center" >
                    Huacalitos
                     <spam class="text-white">Agrotech</spam></h1> </a>
                     <div class="border-top py-4">
                        <div class="navbar navbar-expand-lg container navbar-light ">
                            <a class="navbar-brand nombre-sitio d-lg-none fs-2 fw-bold text-uppercase" href="index.html">
                                Siembra una mejor vida
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacion">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                       
                            <div id="navegacion" class="collapse navbar-collapse">
                                <nav class="navbar-nav container d-flex flex-md-row justify-content-md-between text-center">
                                    <a class="text-white text-decoration-none" href="index.html">Inicio</a>
                                    <a class="text-white text-decoration-none" href="calendario.html">Calendario</a>
                                    <a class="text-white text-decoration-none" href="nosotros.html">Nosotros</a>
                                    <a class="text-white text-decoration-none" href="views/index.php">Tus Post's</a>
                                    <a class="text-white text-decoration-none" href="blog.html">Comparte tu avance</a>
                                    <a class="text-white text-decoration-none" href="blog.html">Cerrar Sesión</a>
                                </nav> 
                            </div>
                        </div>
                    </div>

            <div class="derecha">
                <form  name="busqueda" class="buscar" action="<?php echo RUTA ?>/buscar.php" method="get">

                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
    </header>

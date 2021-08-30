<?php

$pg ="proyectos";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
<?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Proyectos</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Los siguientes son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
            <div class="row bloque">
                <div class="col-12 col-sm-4">
                    <div class="row border m-1 bg-white">
                        <img src="imagenes/abmclientes (1).png" alt="ABM Clientes" class="img-fluid">

                        <div class="col-12 gradiente py-2">
                            <h2>ABM CLIENTES</h2>
                        </div>
                        <div class="col-12 pt-2">
                            <p>Alta, baja y modificacion de un registro de clientes. Realizado en HTML, CSS, PHP, bootstrap y Json. </p>
                        </div>
                        <div class="col-6 my-5">
                            <a href="" class="btn botonrojo">Ver Online</a>
                        </div>
                        <div class="col-6 my-5">
                            <a href="https://github.com" class="letra">Código Fuente</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="row border m-1 bg-white">
                        <img src="imagenes/abmventas.png" alt="Siestema de Ventas" class="img-fluid">

                        <div class="col-12 gradiente py-2">
                            <h2>SISTEMA DE VENTAS</h2>
                        </div>
                        <div class="col-12 pt-2">
                            <p>Sistema de gesión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, bootstrap, JS, AJAX, JQUIERY Y MYSQL de base de datos. </p>
                        </div>
                        <div class="col-6 my-5">
                            <a href="" class="btn botonrojo">Ver Online</a>
                        </div>
                        <div class="col-6 my-5">
                            <a href="https://github.com" class="letra">Código Fuente</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="row border m-1 bg-white">
                        <img src="imagenes/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">

                        <div class="col-12 gradiente py-2">
                            <h2>PROYECTO INTEGRADOR</h2>
                        </div>
                        <div class="col-12 pt-2">
                            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javasript, JQUIERY, AJAX, Html,CSS, Mercadopago con panel administrador,gestor de usuarios, módulos de permisos y funcionalidades a fines. </p>
                        </div>
                        <div class="col-6 my-5">
                            <a href="" class="btn botonrojo">Ver Online</a>
                        </div>
                        <div class="col-6 my-5">
                            <a href="https://github.com" class="letra">Código Fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
    
</body>

</html>
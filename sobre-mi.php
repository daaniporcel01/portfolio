<?php
$pg ="sobre-mi";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Sobre-mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
   <?php include_once("header.php");?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4 ">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Estudiante de la tecnicatura en Programación, me considero una persona con aprendizaje rapido.</p>
                    <a href="contacto.php" class="btn btncv">Descargar mí CV <i class="fas fa-download"></i></a>
                </div>
                <div class="fotomia col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="imagenes/fotomia1.jpg" alt="foto" title="Dani" class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section tecnologias class="color-gradiente pb-5">
            <div class="fullstack container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Full Stack</h2>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-4 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-sm-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" src="imagenes/html5.png" alt="HTML5">
                        </div>
                    </div>

                    <div class="col-sm-4 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" src="imagenes/css-3.png" alt="CSS">
                        </div>
                    </div>

                    <div class="col-sm-4 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-sm-0">
                            <h3>EXCEL</h3>
                            <img class="img-fluid d-block mx-auto" src="imagenes/excel.png" alt="EXCEL">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-4 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-sm-0">
                            <h3>PHOTO SHOP</h3>
                            <img class="img-fluid d-block mx-auto" src="imagenes/photoshop.png" alt="Photoshop">
                        </div>
                    </div>

                    <div class="col-sm-4 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-sm-0">
                            <h3>WORD</h3>
                            <img class="img-fluid d-block mx-auto" src="imagenes/word.png" alt="WORD">
                        </div>
                    </div>
                    <div class="col-sm-4 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-sm-0">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" src="imagenes/codigo-php.png" alt="PHP">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Experencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i>Experiencia Laboral</h2>
                </div>
            </div>
            <div class=" trabajo row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/continuum.png" class="img-fluid" title="Continuum">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Telemarketer-Ventas</h3>
                            <h4>Continuum</h4>
                            <h5>2019-Presente</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/ramona.png" class="img-fluid" title="Sushi Ramona">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Dueño</h3>
                            <h4>Sushi Ramona</h4>
                            <h5>2020-Presente</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/chexa.jpg" class="img-fluid" title="Chexa">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Telemarketer-Ventas</h3>
                            <h4>Chexa</h4>
                            <h5>2016-2018</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i>Formación Acádemica</h2>
                </div>
            </div>
            <div class=" trabajo row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/utn.jpg" class="img-fluid" title="UTN">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Tecnico universitario en Programación</h3>
                            <h4>UTN-FRC</h4>
                            <h5>2021-Presente</h5>
                            <p>https://www.frc.utn.edu.ar/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/its.jpg" class="img-fluid" title="its">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Tecnico superior en Óptica y Contactología</h3>
                            <h4>Instituto Técnico Superior Córdoba</h4>
                            <h5>2018-2020</h5>
                            <p>https://www.institutotecnicocordoba.com/</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i>Formación Acádemica</h2>
                </div>
            </div>
            <div class=" trabajo row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="imagenes/dpc.png" class="img-fluid " title="dpc">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Desarrollador Full Stack</h3>
                            <h4>DEPCSUITE</h4>
                            <h5>2021-Presente</h5>
                            <p>https://depcsuite.com/</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Basico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Deporte</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include_once("footer.php");?>   
</body>
</html>
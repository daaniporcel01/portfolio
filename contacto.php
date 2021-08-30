<?php

$pg ="contacto";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
                <div class="QR">
                    <h2 class="mt-5">Escanea el código y escribime</h2>
                    <img class="mb-5 mt-4 text-sm-start" src="imagenes/wsp.png" alt="QR">
                </div>
            </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div>
                            
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3" placeholder="Nombre y Apellido">
                        </div>
                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control mb-3" placeholder="Correo">
                        </div>
                        <div>
                            <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control mb-3" placeholder="Teléfono">
                        </div>
                        <div>
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10"
                                class="form-control" placeholder="Escriba aqui su mensaje"></textarea>
                        </div>
                        <div>
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn mt-4">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>

</body>

</html>
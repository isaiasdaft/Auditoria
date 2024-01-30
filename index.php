<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url('assets/img/fondoaguila.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            text-align: center;
        }
        hr {
            border: none;
            height: 1px;
            background-color: #545957;
            margin: 0;
        }
        center {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 6.5vh;
            background-color: #545957;
        }
        h2 {
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Ajusta la sombra del texto */
                color: #ffffff; /* Cambia el color del texto a blanco */
                font-size: 46px;
                text-align: center;
            }
        .btn-custom {
            background-color: #366f55;
            color: white;
            padding: 45px 90px; /* Ajusta el padding del botón */
            text-decoration: none;
            display: inline-block;
            font-size: 32px;
            cursor: pointer;
            margin-top: 10px;
            margin-right: 20px; /* Agrega margen a la derecha del botón */
            border: 1px solid white;
            transition: all 0.5s ease;
        }
        .btn-custom:hover {
            background-color: #448d6b;
            color: #fff;
            border-color: #fff;
        }
        .btn-link {
            color: #fff;
            text-decoration: none;
        }
        .animate-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease-out forwards;
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Ajusta el ancho relativo del pie de página */
        #footer-img {
            width: 100%; /* Establece el ancho al 100% del contenedor */
            max-width: 100%; /* Asegura que la imagen no supere el ancho del contenedor */
        }
        #image-container {
            margin-bottom: 20px; /* Ajusta el margen inferior del contenedor de la imagen */
        }
    </style>
</head>

<body>
    <hr>
    <center>
        <h2>OOAD AGUASCALIENTES</h2>
    </center>
    <br>
    <br>
    <br>
    <br>
    <div class="container text-center">
        <div class="row">
            <div id="image-container" class="col-md-10 d-flex align-items-center justify-content-center"> <!-- Alinea vertical y horizontalmente -->
                <img id="2" src="assets/img/IMSS.png" width="400px" class="animate-in">
            </div>
            <div class="col-sm-1 d-flex align-items-center justify-content-center"> <!-- Alinea vertical y horizontalmente -->
                <button type="submit" class="btn btn-custom animate-in">
                    <a href="Departamentos.php" class="btn-link">Auditoria UP 2023</a>
                </button>
            </div>
        </div>
    </div>
        <br>
        <br>
        <br>
        <br>
        <br>    
    <div>
    <img id="footer-img" src="assets/img/pp.png" alt="Pie de página 2">
    </div>
</body>

</html>
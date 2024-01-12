
<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #545957;
            /* Color de fondo de la página */
        }

        hr {
            border: none;
            height: 2px;
            /* Altura de la línea */
            background-color: #252827;
            /* Color oscuro de la línea */
            margin: 0;
        }

        center {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 7.5vh;
            background-color: #f0f0f0;
        }

        h2 {
            text-shadow: 1px 1px 2px rgba(150, 150, 150, 0.5);
            color: #498767;
        }

        .btn-custom {
            background-color: #366f55;
            color: white;
            padding: 25px 80px;
            text-decoration: none;
            display: inline-block;
            font-size: 20px; /* Ajusta el tamaño del texto según tus preferencias */
            cursor: pointer;
            margin-top: 10px;
            margin-left: 1px;
            border: 1px solid white; /* Añade un borde blanco al botón */
            transition: all 0.5s ease; /* Agrega una transición suave a todas las propiedades durante 0.3 segundos */
        }
            
        .btn-custom:hover {
            background-color: white;
            color: #366f55;
            border-color: #366f55; /* Cambia el color del borde al pasar el ratón */
        }

        .btn-link {
            color: inherit;
            text-decoration: none;
        }

        /* Agrega una animación de entrada para la imagen y el botón */
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
    <div class="container text-center">
  <div class="row">
    <div class="col-md-8 d-flex align-items-center justify-content-center"> <!-- Alinea vertical y horizontalmente -->
         <img id="2" src="assets/img/imagen1.png" width="170px" class="animate-in">
    </div>
    <div class="col-sm-1 d-flex align-items-center justify-content-center"> <!-- Alinea vertical y horizontalmente -->
    <button type="submit" class="btn btn-custom animate-in">
        <a href="Departamentos.php" class="btn-link">Auditoria UP 2023</a>
      </button>
    </div>
  </div>
</div>


</body>

</html>
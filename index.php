
<?php include("vistas/headerprincipal.php"); ?>

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
            background-color: #545957; /* Color de fondo de la página */
        }

        hr {
            border: none;
            height: 2px; /* Altura de la línea */
            background-color: #252827; /* Color oscuro de la línea */
            margin: 0;
        }

        center {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 7vh; /* Altura del centro de la página */
            background-color: #f0f0f0; /* Color de fondo que rodea al elemento h2 */
        }

        h2 {
            text-shadow: 1px 1px 2px rgba(150, 150, 150, 0.5); /* Sombra más clara o blanca */
            color: #498767; /* Color del texto */
        }


        button {
            font-size: 16px; /* Tamaño del texto del botón */
            padding: 10px 20px; /* Espaciado interno del botón */
            background-color: #007bff; /* Color de fondo del botón */
            color: #ffffff; /* Color del texto del botón */
            border: none;
            cursor: pointer;
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

    <img id="2" src="assets/img/imagen1.png" width="165px">
    
    <button type="sumbit" class="btn btn-secondary"> <a href="vistas/Departamentos.php">Secondary</a></button>

</body>

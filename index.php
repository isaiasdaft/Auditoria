<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/inicio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
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
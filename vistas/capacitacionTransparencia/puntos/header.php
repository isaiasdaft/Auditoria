
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
    <link rel="stylesheet" type="text/css" href="../../../librerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../librerias/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../../librerias/datatable/jquery.dataTables.min.js">
    <link rel="stylesheet" type="text/css" href="../../../librerias/datatable/dataTables.bootstrap4.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../assets/css/extras.css">
    <link rel="stylesheet" href="../../../assets/css/nav.css">
    <link rel="icon" href="../../../assets/img/a2.ico" type="image/x-icon">
</head>
<body class="animated fadeIn">
<nav type="navbar" class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #1F6157;">
    <div class="container">
        <a class="navbar-brand">
            <img src="../../../assets/img/a.jpg" alt="" width="90px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-haspopup="true" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Aquí agregamos el título en la parte central del navbar -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                <a class="nav-link h2">JEFATURA DE SERVICIOS DE DESARROLLO DE PERSONAL</a>
                </li>
            </ul>
            <a href="javascript:void(0);" onclick="cerrarSesion()"class="btn-cus btn-lg"><span class="fa-solid fa-house"></span> </a>
        </div>
    </div>
</nav>
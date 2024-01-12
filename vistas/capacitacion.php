<?php
session_start();
include("../conexion.php");

if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit;
} else {
    $idd = $_SESSION['id'];
}

$tituloPagina = "Inicio";
?>


<?php include("headerprincipal.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Capacitación"; ?></title>
  <link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../librerias/fontawesome/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <style>
    /* Estilos del encabezado */



    .logo a {
      color: #5E6160;
      /* Color del texto del logo */
    }

    .nav-link {
      color: #5E6160;
      /* Color del texto del enlace de navegación */
    }

    .nav-link:hover {
      color: #007bff;
    }

    #hero {
      background-color: #545957;
      color: #fff;
      padding: 50px 0;
      text-align: center;
    }

    #hero h1 {
      font-size: 3em;
      /* Tamaño de fuente del título principal */
      margin-bottom: 25px;
      /* Espaciado inferior del título principal */
    }

    #hero h2 {
      font-size: 1.5em;
      /* Tamaño de fuente del subtítulo */
      margin-bottom: 30px;
      /* Espaciado inferior del subtítulo */
    }

    .icon-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #757676;
      padding: 20px;
      border-radius: 10px;
      transition: 0.3s;
      border-width: 3px;
      border-style: solid;
      border-color: #347357;
      color: #ffffff;
    }

    .icon-box:hover {
      background-color: #515353;
      color: #ffffff;
    }

    .icon-box i {
      font-size: 2em;
      margin-bottom: 5px;
      /* Reduzco el espaciado inferior de los íconos */
    }

    .icon-box h3 {
      font-size: 1.2em;
      margin-bottom: 0;
      /* Elimino el espaciado inferior del título de la caja de iconos */
    }

    .icon-box a {
      color: #ffffff;
    }

    .icon-box:hover a {
      color: #000000;
    }

    .nav-link:hover {
      color: #007bff;
    }
    .btn-custom {
      background-color: #545957;
      color: #438c6b;
      border: none;
      padding: 15px 20px;
      border-radius: 35px;
      cursor: pointer;
      transition: background-color 0.3s ease-out, color 0.3s ease-out;
      font-size: 55px;
     
    }


    /* Estilo para el icono dentro del botón */
    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 55px;
      
      /* Ajusta el espacio entre el icono y el texto si es necesario */
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <!-- ... (tu contenido actual del encabezado) ... -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-12">
          <h2>DEPARTAMENTO DE CAPACTIACIÓN Y TRANSPARENCIA</h2>
        </div>
      </div>
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="capacitacionTransparencia/capa.php">CAPACITACIÓN</a></h3>

          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="capacitacionTransparencia/transparencia.php">TRANSPARENCIA </a></h3>

          </div>
        </div>
      </div>  
      <p></p>
      <br>
      <a href="../Departamentos.php" class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
    </a>

    <br>
    <br>
    <br>
    <br>
    </div>
  </section>
</body>

<script src="../librerias/jquery-3.7.1.min.js"></script>
<script src="../librerias/bootstrap4/bootstrap.min.js"></script>
<script src="../librerias/bootstrap4/popper.min.js"></script>
<script src="../librerias/datatable/jquery.dataTables.min.js"></script>
<script src="../librerias/datatable/dataTables.bootstrap4.min.js"></script>


</html>
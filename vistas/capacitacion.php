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

  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #fff;
      /* Color de fondo de la página */
    }

    .logo a {
      color: #a0cbac;
      /* Color del texto del logo */
    }

    .nav-link {
      color: #a0cbac;
      /* Color del texto del enlace de navegación */
    }

    .nav-link:hover {
      color: #007bff;
      /* Color del texto del enlace de navegación al pasar el ratón */
    }

    #hero {
      background-image: url('../assets/img/fondoaguila.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      height: 100vh;
      margin: 0;
      padding: 20px 0;
      text-align: center;
    }

    #hero h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }

    #hero h2 {
      font-size: 4.2em;
      margin-bottom: 40px;
      color: #000000;
    }

    .icon-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #a0cbac;
      padding: 20px;
      /* Ajusta el padding para permitir más espacio para el texto */
      border-radius: 15px;
      /* Ajusta el radio de borde para un aspecto más redondeado */
      transition: 0.3s;
      border-width: 3px;
      border-style: solid;
      border-color: #347357;
      color: #ffffff;
      height: 100%;
      /* Garantiza que las cajas tengan la misma altura */
      overflow: hidden;
      /* Evita que el texto se desborde fuera de las cajas */
      /* Ajusta el ancho de las cajas para evitar que el texto se desborde */
      
      /* Ajusta el ancho según tus necesidades */
      margin: 10px;
    }

    .icon-box:hover {
      background-color: #246f64;

    }

    .icon-box i {
      font-size: 3em;
      /* Aumenta el tamaño de los íconos */
      margin-bottom: 15px;
      width: 100%;
      /* Ajusta el ancho del icono al 100% */
      text-align: center;
      /* Centra el icono dentro de su contenedor */
    }

    .icon-box h3 {
      font-size: 2em;
      margin-bottom: 10px;
      /* Elimino el espaciado inferior del título de la caja de iconos */
    }

    .icon-box a {
      color: #0a0e0b;
    }

    .icon-box:hover a {
      color: #000000;
    }

    .nav-link:hover {
      color: #007bff;
    }

    .btn-custom {

      color: #438c6b;
      border: none;
      padding: 15px 20px;
      border-radius: 55px;
      cursor: pointer;
      transition: background-color 0.3s ease-out, color 0.3s ease-out;
      font-size: 55px;

    }

    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 85px;

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
        <div class="col-xl-12 col-lg-12">
          <h2>DEPARTAMENTO DE CAPACITACIÓN Y TRANSPARENCIA</h2>
        </div>
      </div>
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-4 col-md-8">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="capacitacionTransparencia/capa.php">CAPACITACIÓN</a></h3>

          </div>
        </div>
        <div class="col-xl-4 col-md-8">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="capacitacionTransparencia/transparencia.php">TRANSPARENCIA </a></h3>

          </div>
        </div>
      </div>  
      <p></p>
      <br>
      <br>
      <a  href="javascript:void(0);" onclick="cerrarSesion()"class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
    </a>

    <br>
    <br>
    <br>
    <br>
    </div>
  </section>
</body>

<script>
        // JavaScript para agregar clases al cerrar sesión
        function cerrarSesion() {

            setTimeout(function() {
                window.location.href = 'cerrar_sesion.php';
                setTimeout(function() {
                    document.body.classList.remove('logged-out', 'logged-out-effect');
                }, 500);
            }, 500);
        }
    </script>
<script src="../librerias/jquery-3.7.1.min.js"></script>
<script src="../librerias/bootstrap4/bootstrap.min.js"></script>
<script src="../librerias/bootstrap4/popper.min.js"></script>
<script src="../librerias/datatable/jquery.dataTables.min.js"></script>
<script src="../librerias/datatable/dataTables.bootstrap4.min.js"></script>
</html>
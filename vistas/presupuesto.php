<?php
session_start();
include("../conexion.php");

if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit;
} else {
    $idd = $_SESSION['id'];
}

$tituloPagina = "Presupesuto";
?>


<?php include("headerprincipal.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Presupuesto y control de gastos"; ?></title>
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
    }

    .logo a {
      color: #a0cbac;
    }

    .nav-link {
      color: #a0cbac;
    }

    .nav-link:hover {
      color: #007bff;
    }

    #hero {
      background-image: url('../assets/img/fondoaguila.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      height: 100vh;
      /* Ajusta la altura al 100% de la ventana */
      margin: 0;
      /* Elimina el margen para que el fondo se extienda hasta el borde */
      padding: 20px 0;
      text-align: center;
    }

    #hero h1 {
      font-size: 3em;
      margin-top: 10px;
      /* Ajusta el margen superior del título */
      margin-bottom: 20px;
    }

    #hero h2 {
      font-size: 1.5em;
      margin-bottom: 15px;
      color: #000000;
    }

    .icon-box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #a0cbac;
      padding: 22px;
      border-radius: 10px;
      transition: 0.3s;
      border-width: 3px;
      border-style: solid;
      border-color: #347357;
      color: #ffffff;
      margin-top: 20px;
    }

    .icon-box:hover {
      background-color: #246f64;
      color: #ffffff;
    }

    .icon-box i {
      font-size: 2em;
      margin-bottom: 5px;
    }

    .icon-box h3 {
      font-size: 1.2em;
      margin-bottom: 0;
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
      border-radius: 35px;
      cursor: pointer;
      transition: background-color 0.3s ease-out, color 0.3s ease-out;
      font-size: 55px;
    }

    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 55px;
    }
  </style>
</head>
<body>
  <header id="header" class="fixed-top">
    <!-- ... (tu contenido actual del encabezado) ... -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-12">
          <h2>DEPARTAMENTO DE PRESUPUESTO Y CONTROL DE GASTOS</h2>
        </div>
      </div>
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-3 col-md-12">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="presupuesto/gestionGastos.php">PRESUESTO Y GESTIÓN DEL GASTO</a></h3>
          </div>
        </div>
      </div>  
      <p></p>
      <br>
      <a  href="javascript:void(0);" onclick="cerrarSesion()"class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
    </a>
    
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
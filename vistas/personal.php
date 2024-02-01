<?php
session_start();
include("../conexion.php");

if (!isset($_SESSION['id'])) {
  header('Location: ../index.php');
  exit;
} else {
  $idd = $_SESSION['id'];
}
$tituloPagina = "Personal";
?>
<?php include("headerprincipal.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Auditoría"; ?></title>
  <link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/opc.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
          <h2>DEPARTAMENTO DE PERSONAL</h2>
        </div>
      </div>
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="350">
        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="personal/fuerzaTrabajo.php">FUERZA DE TRABAJO​</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="personal/DotacionRH.php">DOTACIÓN DE RH​</a></h3>

          </div>
        </div>

        <div class="col-xl-3 col-md-3">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="personal/prestacionesPersonal.php">PRESTACIONES AL PERSONAL</a></h3>

          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="personal/retiroLaboral.php">RETIRO LABORAL</a></h3>
          </div>

        </div>
      </div>
      <p></p>
      <br>
      <a href="javascript:void(0);" onclick="cerrarSesion()" class="btn-custom btn-lg">
        <span class="fa-solid fa-reply"></span>
      </a>
    </div>
  </section>
</body>

<script>
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
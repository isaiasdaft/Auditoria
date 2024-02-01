<?php
session_start();
include("../conexion.php");
if (!isset($_SESSION['id'])) {
  header('Location: ../index.php');
  exit;
} else {
  $idd = $_SESSION['id'];
}
$tituloPagina = "Relaciones Laborales";
?>
<?php include("headerprincipal.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Relaciones Laborales"; ?></title>
  <link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/opc.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>

<body>
<header id="headerPrincipal" class="fixed-top">
    <!-- Contenido del encabezado... -->
</header> 

  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12 col-lg-12">
          <h2>DEPARTAMENTO DE RELACIONES LABORALES</h2>
        </div>
      </div>
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-4 col-md-8">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="relaciones/relacionesLab.php">Relaciones laborales</a></h3>
          </div>
        </div>
      </div>
      <p></p>
      <br>
      <br>
      <a href="javascript:void(0);" onclick="cerrarSesion()" class="btn-custom btn-lg">
        <span class="fa-solid fa-reply"></span>
      </a>
      <br>
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
<?php
session_start();
include("../../conexion.php");

if (!isset($_SESSION['id'])) {
    header('Location: ../../index.php');
    exit;
} else {
    $idd = $_SESSION['id'];
    $depa= $_SESSION['departamento'];
}

$tituloPagina = "Transparecia";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Fuerza de Trabajo"; ?></title>
  <link rel="stylesheet" type="text/css" href="../../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/nav.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/puntos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <?php include("headerCapacitacion.php"); ?>

  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12 col-lg-12">
          <h2>DEPARTAMENTO DE CAPACITACIÓN Y TRANSPARENCIA</h2>
          <h4>TRANSPARENCIA</h4>
        </div>
      </div>
  
      <ul class="point-list">
        <li class="point-item">
          <a href="puntos/7_1.php">7.1</a>
        </li>
        <li class="point-item">
          <a href="puntos/7_2.php">7.2</a>
        </li>
        <li class="point-item">
          <a href="puntos/7_3.php">7.3</a>
        </li>
        <li class="point-item">
          <a href="puntos/7_4.php">7.4</a>
        </li>
       
      </ul>
      <br>
      <br>
      <a href="../capacitacion.php" class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
    </a>

    </div>
  </section><!-- End Hero -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Ilumina todos los elementos al cargar la página
      var iconBoxes = document.querySelectorAll('.icon-box');
      iconBoxes.forEach(function(box) {
        box.classList.add('selected');
      });
    });

    function toggleIcon(element) {
      // Desilumina el elemento clicado
      element.classList.remove('selected');
    }
  </script>


</body>

</html>
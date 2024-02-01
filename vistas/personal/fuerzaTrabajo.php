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

$tituloPagina = "Personal";
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
  <?php include("headerpersonal.php"); ?>
  <div id="hero">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12 col-lg-12">
          <h2>DEPARTAMENTO DE PERSONAL</h2>
          <h4>Fuerza de Trabajo</h4>
        </div>
      </div>
    <p></p>

        <ul class="point-list">
        <li class="point-item">
          <a href="puntos/1_1.php">1.1</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_2.php">1.2</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_3.php">1.3</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_4.php">1.4</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_5.php">1.5</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_6.php">1.6</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_7.php">1.7</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_8.php">1.8</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_9.php">1.9</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_10.php">1.10</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_11.php">1.11</a>
        </li>
        <li class="point-item">
          <a href="puntos/1_12.php">1.12</a>
        </li>
      </ul>
      <br>
      <p></p>
        <a href="../personal.php" class="btn-custom btn-lg">
          <span class="fa-solid fa-reply"></span>
        </a>
    </div>
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
<script src="../../librerias/jquery-3.7.1.min.js"></script>
<script src="../../librerias/bootstrap4/bootstrap.min.js"></script>
<script src="../../librerias/bootstrap4/popper.min.js"></script>
<script src="../../librerias/datatable/jquery.dataTables.min.js"></script>
<script src="../../librerias/datatable/dataTables.bootstrap4.min.js"></script>
</html>
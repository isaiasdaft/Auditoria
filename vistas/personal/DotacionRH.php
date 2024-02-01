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

  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12 col-lg-12">
          <h2>DEPARTAMENTO DE PERSONAL</h2>
          <h4>Dotación de Recursos Humanos</h4>
        </div>
      </div>
      <p></p>
      <ul class="point-list">
        <li class="point-item">
          <a href="puntos/2_1.php">2.1</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_2.php">2.2</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_3.php">2.3</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_4.php">2.4</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_5.php">2.5</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_6.php">2.6</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_7.php">2.7</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_8.php">2.8</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_9.php">2.9</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_10.php">2.10</a>
        </li>
        <li class="point-item">
          <a href="puntos/2_11.php">2.11</a>
        </li>
   
      </ul>
      <br>
      <a href="../personal.php" class="btn-custom btn-lg">
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
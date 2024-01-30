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

$tituloPagina = "Relaciones Laborales";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo isset($tituloPagina) ? $tituloPagina : "Fuerza de Trabajo"; ?></title>
  <link rel="stylesheet" type="text/css" href="../../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/nav.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    #hero {
      background-color: #fff;
      color: #fff;
      padding: 60px 0;
      text-align: center;
    }
    #hero h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }
    #hero h2 {
      font-size: 4.4em;
      margin-bottom: 40px;
    }
    #hero h4 {
      font-size: 3.3em;
      margin-bottom: 20px;
      color: #1a564d;
    }

    .point-list {
      list-style-type: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      margin-top: 40px;
    }

    .point-item {
      background-color: #2e8c7e;
      padding: 35px;
      border-radius: 10px;
      transition: background-color 0.3s, transform 0.3s;
      cursor: pointer;
      text-align: center;
      width: 210px;
    }
    .point-item:hover {
      background-color: #1F6157;
      transform: scale(1.15);
    }
    .point-item a {
      text-decoration: none;
      color: #ffffff;
      font-size: 2em;
    }

    .btn-custom {
      background-color: #fff;
      color: #438c6b;
      border: none;
      padding: 15px 20px;
      border-radius: 55px;
      cursor: pointer;
      transition: background-color 0.5s ease-out, color 0.5s ease-out;
      font-size: 75px;
      margin-top: 30px;
    }

    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 80px;
    }
  </style>
</head>
<body>
<?php include("headerRelaciones.php"); ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <!-- ... (tu contenido actual del encabezado) ... -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12 col-lg-12">
          <h2>DEPARTAMENTO DE RELACIONES LABORALES</h2>
          <h4>Relaciones Laborales</h4>
        </div>
      </div>
      <br>
    
      <ul class="point-list">
        <li class="point-item">
          <a href="puntos/5_1.php">5.1</a>
        </li>
        <li class="point-item">
          <a href="puntos/5_2.php">5.2</a>
        </li>
        <li class="point-item">
          <a href="puntos/5_3.php">5.3</a>
        </li>
        <li class="point-item">
          <a href="puntos/5_4.php">5.4</a>
        </li>
        <li class="point-item">
          <a href="puntos/5_5.php">5.5</a>
        </li>
        <li class="point-item">
          <a href="puntos/5_6.php">5.6</a>
        </li>
        <li class="point-item">
          <a href="puntos/5_7.php">5.7</a>
        </li>
        <li class="point-item">
          <a href="puntos/5_8.php">5.8</a>
        </li>

      </ul>
      <br>
      <br>
      <a href="../relaciones.php" class="btn-custom btn-lg">
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

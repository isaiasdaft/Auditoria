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
      font-size: 1.5em;
      margin-bottom: 40px;
    }
    #hero h4 {
      font-size: 2em;
      margin-bottom: 20px;
      color: #1a564d;
    }

    .point-list {
      list-style-type: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }

    .point-item {
      background-color: #5E6160;
      padding: 20px;
      border-radius: 10px;
      transition: background-color 0.3s, transform 0.3s;
      cursor: pointer;
      text-align: center;
      width: 120px;
    }
    .point-item:hover {
      background-color: #777878;
      transform: scale(1.15);
    }
    .point-item a {
      text-decoration: none;
      color: #ffffff;
      font-size: 1.1em;
    }

    .btn-custom {
      background-color: #fff;
      color: #438c6b;
      border: none;
      padding: 15px 20px;
      border-radius: 35px;
      cursor: pointer;
      transition: background-color 0.5s ease-out, color 0.5s ease-out;
      font-size: 55px;
      margin-top: 30px;
    }

    .btn-custom .fa-reply {
      color: #438c6b;
      font-size: 55px;
    }
  </style>
</head>

<body>
<?php include("headerpersonal.php"); ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <!-- ... (tu contenido actual del encabezado) ... -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <h2>DEPARTAMENTO DE PERSONAL</h2>
          <h4>Presentaciones al Trabajador</h4>
        </div>
      </div>
      <br>
      <ul class="point-list">
        <li class="point-item">
          <a href="puntos/3_1.php">3.1</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_2.php">3.2</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_3.php">3.3</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_4.php">3.4</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_5.php">3.5</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_6.php">3.6</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_7.php">3.7</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_8.php">3.8</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_9.php">3.9</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_10.php">3.10</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_11.php">3.11</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_12.php">3.11</a>
        </li>
        <li class="point-item">
          <a href="puntos/3_13.php">3.11</a>
        </li>
      </ul>
      <p></p>
      <a href="../personal.php" class="btn-custom btn-lg">
      <span class="fa-solid fa-reply"></span>
    </a>
    </div>


  </section><!-- End Hero -->

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

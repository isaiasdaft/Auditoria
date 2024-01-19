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
  <div id="hero">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
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